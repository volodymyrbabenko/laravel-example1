<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\Course;
use App\Models\FreeCourse;
use App\Models\Site;
use App\Models\Comment;
use Illuminate\Support\Facades\Validator;


class MainController extends Controller
{
    public function index() {
		$posts = Post::where('date_show', '<', Carbon::now())
			->orderByDesc('date_show')
			->paginate(env('USER_COUNT_ON_PAGE'));
		return view('index', ['posts' => $posts]);
	}

	public function author() {
		return view('author');
	}

	public function courses() {
		return view('courses', [
			'courses' => Course::orderByDesc('id')->get(),
			'free_courses' => FreeCourse::orderByDesc('id')->get(),
		]);
	}

	public function releases() {
		$free_courses = FreeCourse::orderByDesc('id')->get();
		$posts = Post::where('is_release', 1)
			->where('date_show', '<', Carbon::now())
			->orderByDesc('date_show')
			->paginate(env('USER_COUNT_ON_PAGE'));
		$count = Post::where('is_release', 1)
			->where('date_show', '<', Carbon::now())
			->count();
		return view('releases', [
			'free_courses' => $free_courses,
			'posts' => $posts,
			'count' => $count,
		]);
	}

	public function sites() {
		return view('sites', [
			'sites' => Site::where('is_active', 1)->orderByDesc('id')->get()
		]);
	}

	public function addSite(Request $request) {

		// if ($validator->fails()) {
			// return back()->withErrors($validator)->withInput();
		// }

		$success_add = false;
		if($request->add_site) {
			$validated = $request->validate([
				'address' => 'required|url|unique:sites',
				'description' => 'required|min:10|max:200',
				'g-recaptcha-response' => 'required|captcha', //капча
			]);
			$site = new Site();
			$site->address = $validated['address'];
			$site->description = $validated['description'];
			$site->save();
			$success_add = true;
		}
		return view('site-add', ['success_add' => $success_add]);
	}

	public function post($alias, Request $request) {
		$post = Post::where('alias', $alias)->first();
		if(!$post) abort(404);

		$this->setAccessToken($request); //вызов функции (находится ниже)
		if ($request->add_comment) {
			$validator = Validator::make($request->all(), [
				'name' => 'required|alpha|max:100',
				'text' => 'required|string|max:500',
				'g-recaptcha-response' => 'required|captcha', //капча
			]);
			if($validator->fails()) return redirect()->route('post.comments', ['alias' => $alias])->withErrors($validator->errors())->withInput();
			$validated = $validator->validated();
			$comment = new Comment();
			$comment->post_id = $post->id;
			$comment->name = $validated['name'];
			$comment->text = $validated['text'];
			$comment->access_token = $request->session()->get('access_token');
			$comment->save();
			return redirect()->route('post.comments', ['alias' => $alias]);
		}
		$comments = Comment::where('post_id', $post->id)
			->orderByDesc('created_at')->get();
		$posts = Post::where('id', '!=', $post->id)
			->inRandomOrder()->limit(env('USER_COUNT_OTHER_POSTS'))->get();
		return view('post', [
			'post' => $post,
			'comments' => $comments,
			'posts' => $posts,
		]);
	}

	public function setAccessToken(Request $request) {
		if($request->session()->missing('access_token')) {
			$request->session()->put('access_token', Str::random(32));
		}
	}

	public function deleteComment(Comment $comment) {
		$post = $comment->post;
		$comment->delete();
		return redirect()->route('post.comments', ['alias' => $post->alias]);
	}

	public function search(Request $request) {
		if($request->search_query) {
			$validated = $request->validate([
				'search_query' => 'required|string|min:3|max:200'
			]);
			$search_query = $validated['search_query'];
			$posts = Post::where('title', 'LIKE', "%$search_query%")
				->orWhere('intro_text', 'LIKE', "%$search_query%")
				->orWhere('full_text', 'LIKE', "%$search_query%")
				->paginate(env('USER_COUNT_ON_PAGE'));
		}
		else return redirect()->route('index');
		return view('search', ['search_query' => $search_query, 'posts' => $posts]);
	}
}
