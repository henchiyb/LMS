<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CouresUser extends Model
{
    protected $table = 'courses_users';

    protected $fillable = [
        'course_id',
        'user_id',
        'point',
        'rank',
    ];
}
