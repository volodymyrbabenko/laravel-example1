<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Course;
use App\Models\FreeCourse;


class MainLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
		$slider = Course::orderByDesc('id')->get();
		$courses = FreeCourse::orderByDesc('id')->get(); //для правого столбца
        return view('layouts.main-layout', ['slider' => $slider, 'courses' => $courses]);
    }
}
