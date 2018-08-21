<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    /**
     * The user repository instance.
     */
    protected $modelUser;

    /**
     * Create a new controller instance.
     *
     * @param  User $users
     * @return void
     */
    public function __construct(User $user)
    {
        $this->modelUser = $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $selectedUser = User::findOrFail($id);

        // If the user is teacher
        if ($selectedUser->role == 0) {
            $specializes = $this->modelUser->findSpecializesFollowUser($id);

            foreach ($specializes as $specialize) {
                $specializesNameArray[] = $specialize->name;
            }
            
            $specializesName =  implode(', ', $specializesNameArray);

            $courses = $selectedUser->courses;

            foreach ($courses as $course) {
                $coursesNameArray[] = $course->title;
            }
            
            $coursesName =  implode(', ', $coursesNameArray);

            $countStudent = 0;
            foreach ($courses as $course) {
                $countStudent += $course->users->count();
            }

            $teacherRate = $selectedUser->courses->avg('course_rate');

            return view('users.users.show', compact(
                'selectedUser',
                'specializesName',
                'coursesName',
                'countStudent',
                'teacherRate'
            ));
        }

        // If the user is student
        return view('users.users.show', compact(
            'selectedUser'
        ));
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
    public function update($id, UpdateUserRequest $request)
    {
        $this->modelUser->updateUser($id, $request->all());

        $selectedUser = User::find($id);

        return response()->json($selectedUser);
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
}
