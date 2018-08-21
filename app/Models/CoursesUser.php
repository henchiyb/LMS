<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CoursesUser extends Pivot
{
    protected $table = 'courses_users';

    protected $fillable = [
        'point',
        'rank',
        'course_id',
        'user_id',
    ];
}
