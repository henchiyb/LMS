<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Embed\Embed;

class Lesson extends Model
{
    use SoftDeletes;
    
    protected $table = 'lessons';

    protected $fillable = [
        'title',
        'description',
        'video_link',
        'duration',
        'course_id',
    ];

    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }

    public function getVideoByLesson($lessonId)
    {
        $lesson = Lesson::findOrFail($lessonId);
        $video = Embed::create($lesson->video_link);

        return $video;
    }
}
