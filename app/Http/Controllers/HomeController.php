<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Lesson;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Models\UserLesson;

class HomeController extends Controller
{

    public function index()
    {
        $courses = Courses::all()->random(3);
        $reviews = Review::all()->random(3);
        $lessonCount = Lesson::count();
        $courseCount = Lesson::count();
        $userLessonCount = UserLesson::count();
        return view('index', compact('courses', 'reviews', 'lessonCount', 'courseCount', 'userLessonCount'));
    }
}
