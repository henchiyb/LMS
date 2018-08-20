<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
}
