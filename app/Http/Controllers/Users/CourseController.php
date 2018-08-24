<?php

namespace App\Http\Controllers\Users;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * The user repository instance.
     */
    protected $modelCourse;

    /**
     * Create a new controller instance.
     *
     * @param  User $users
     * @return void
     */
    public function __construct(Course $course)
    {
        $this->modelCourse = $course;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mostViewCourses = $this->modelCourse->getCourseFollowView(config('app.trendNumber'))->get();
        $mostRateCourses = $this->modelCourse->getCourseFollowRate(config('app.trendNumber'))->get();
        $mostNewestCourses = $this->modelCourse->getCourseFollowNewest(config('app.trendNumber'))->get();

        return view('users.courses.index', compact(
            'mostViewCourses',
            'mostRateCourses',
            'mostNewestCourses'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $selectedCourse = Course::findOrFail($id);

        return view('users.courses.show', compact('selectedCourse'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getCourseFollowFilter($filter)
    {
        if ($filter == 'popular') {
            $courses = $this->modelCourse->getCourseFollowView(config('app.filterCount'))
            ->paginate(config('app.paginateCount'));
            $type = 0;
        }

        if ($filter == 'rate') {
            $courses = $this->modelCourse->getCourseFollowRate(config('app.filterCount'))
            ->paginate(config('app.paginateCount'));
            $type = 1;
        }

        if ($filter == 'newest') {
            $courses = $this->modelCourse->getCourseFollowNewest(config('app.filterCount'))
            ->paginate(config('app.paginateCount'));
            $type = 2;
        }

        return view('users.courses.index_filter', compact(
            'courses',
            'type'
        ));
    }

    public function getCourseByCategory($categoryId)
    {
        $category = Category::findOrFail($categoryId);
        $courses = $category->courses;

        return view('users.courses.course_category', compact('courses', 'category'));
    }
}
