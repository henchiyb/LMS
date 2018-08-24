<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all()->sortByDesc('views')->take(config('app.mostViewed'));
        $users = User::where('role', 0)->where('isAdmin', 0)->paginate(config('app.paginateCount'));

        return view('users.home', compact('courses', 'users'));
    }
}
