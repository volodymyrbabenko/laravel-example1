<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

	protected $casts = [
		'date_show' => 'date'
	];

	public function comments() {
		return $this->hasMany(Comment::class);
	}
}
