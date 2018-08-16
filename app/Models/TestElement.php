<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TestElement extends Model
{
    use SoftDeletes;
    
    protected $table = 'test_elements';

    protected $fillable = [
        'question',
        'answer',
        'test_id',
    ];
}
