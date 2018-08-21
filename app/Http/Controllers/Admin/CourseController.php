<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Category;
use App\Http\Requests\FormCourseRequest;
use App\Models\Lesson;

class CourseController extends Controller
{
    protected $modelCourse;
    /**
     * Create a new controller instance.
     *
     * @param Specialize $specialize
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
        $courses = Course::all();

        return view('admin.courses.index', compact('courses'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::findOrFail($id);
        $categories = Category::where('parent_id', '!=', 0)->pluck('title', 'id');

        return view('admin.courses.edit', compact('course', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FormCourseRequest $request, $id)
    {
        $data = $request->all();
        $result = $this->modelCourse->updateCourse($data, $id);

        if ($result) {
            flash(__('update status') . $id)->success();
        } else {
            flash(__('something wrong'))->error();
        }

        return redirect(route('admins.courses.edit', $id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = $this->modelCourse->deleteCourse($id);

        if ($result) {
            flash(__('delete status') . $id)->success();
        } else {
            flash(__('something wrong'))->error();
        }

        return redirect(route('admins.courses.index'));
    }

    public function active($id)
    {
        $course = Course::findOrFail($id);

        $course->isActive = 1;
        $course->save();
        flash(__('successfully'))->success();
        
        return redirect(route('admins.courses.index'));
    }
}
