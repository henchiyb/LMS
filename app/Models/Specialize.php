<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Specialize extends Model
{
    use SoftDeletes;
    
    protected $table = 'specializes';

    protected $fillable = [
        'name',
        'teaching_grade',
    ];
}
