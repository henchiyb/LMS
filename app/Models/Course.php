<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class Course extends Model
{
    use SoftDeletes;
    
    protected $table = 'courses';

    protected $fillable = [
        'title',
        'course_avatar',
        'course_avatar_2',
        'course_avatar_3',
        'description',
        'lecture_numbers',
        'duration',
        'views',
        'level',
        'course_rate',
        'isAccepted',
        'category_id',
        'user_id',
    ];

    /**
     * Get the user that owns the phone.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * The roles that belong to the user.
     */
    public function users()
    {
        return $this->belongsToMany('App\Models\User', 'courses_users');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function findCourse($id)
    {
        return Course::findOrFail($id);
    }

    public function createCourse($data)
    {
        return Course::create($data);
    }

    public function updateCourse($data, $id)
    {
        $result = Course::findOrFail($id)->update($data);

        return $result;
    }

    public function deleteCourse($id)
    {
        $result = Course::findOrFail($id)->delete();

        return $result;
    }

    public function getUserById($userId)
    {
        return User::findOrFail($userId);
    }

    public function getCourseFollowView($count)
    {
        return Course::orderBy('views', 'desc')->take($count);
    }

    public function getCourseFollowRate($count)
    {
        return Course::orderBy('course_rate', 'desc')->take($count);
    }

    public function getCourseFollowNewest($count)
    {
        return Course::orderBy('created_at', 'desc')->take($count);
    }
}
