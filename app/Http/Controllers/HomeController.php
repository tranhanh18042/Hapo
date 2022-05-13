<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\UserLesson;
use App\Models\Lesson;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $courses = Courses::all()->random(3);
        $reviews = Review::all()->random(4);
        $courseCount = Courses::count();
        $lessonCount = Lesson::count();
        $userLessonCount = UserLesson::count();
        return view('index', compact('courses', 'reviews', 'courseCount', 'lessonCount', 'userLessonCount'));
    }
}
