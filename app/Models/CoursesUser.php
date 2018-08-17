<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoursesUser extends Model
{
    protected $table = 'courses_users';

    protected $fillable = [
        'point',
        'rank',
        'course_id',
        'user_id',
    ];
}
