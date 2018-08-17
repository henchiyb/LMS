<?php

use Illuminate\Database\Seeder;
use App\Models\Lesson;

class LessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('lessons')->truncate();
        Schema::enableForeignKeyConstraints();

        Lesson::create([
            'title' => 'Giới thiệu về Git',
            'description' => 'Quản lý dự án với GIT',
            'video_link' => 'https://www.youtube.com/watch?v=E1U3ckBaUN8',
            'duration' => '0:8:36',
            'course_id' => '1'
        ]);

        Lesson::create([
            'title' => 'Khởi tạo Repository',
            'description' => 'Quản lý dự án với GIT',
            'video_link' => 'https://www.youtube.com/watch?v=uBVenaol5xw',
            'duration' => '0:10:54',
            'course_id' => '1'
        ]);

        Lesson::create([
            'title' => 'Khái niệm và cách làm việc với Branch',
            'description' => 'Quản lý dự án với GIT',
            'video_link' => 'https://www.youtube.com/watch?v=c217pCBw3Ws',
            'duration' => '0:11:08',
            'course_id' => '1'
        ]);

        Lesson::create([
            'title' => 'Cài đặt MySQL',
            'description' => 'Hướng dẫn cài đặt MySQL',
            'video_link' => 'https://www.youtube.com/watch?v=ypmNtSyLBdw',
            'duration' => '0:8:04',
            'course_id' => '2'
        ]);

        Lesson::create([
            'title' => 'MySQL Data Types',
            'description' => 'Tìm hiểu MySQL data types',
            'video_link' => 'https://www.youtube.com/watch?v=ZAs-MhBS-kI',
            'duration' => '0:2:01',
            'course_id' => '2'
        ]);

        Lesson::create([
            'title' => 'Khóa ngoại foreign key',
            'description' => 'Khóa ngoại foreign key',
            'video_link' => 'https://www.youtube.com/watch?v=53r33AQKlZ0',
            'duration' => '0:17:49',
            'course_id' => '2'
        ]);

        
        Lesson::create([
            'title' => 'Giới thiệu Laravel Framework',
            'description' => 'Khóa học lập trình Laravel',
            'video_link' => 'https://www.youtube.com/watch?v=XJwhQumKCxU',
            'duration' => '0:15:55',
            'course_id' => '3'
        ]);

        Lesson::create([
            'title' => 'Cài đặt Laravel',
            'description' => 'Khóa học lập trình Laravel',
            'video_link' => 'https://www.youtube.com/watch?v=AbCsV68Kzrg',
            'duration' => '0:5:55',
            'course_id' => '3'
        ]);
    }
}
