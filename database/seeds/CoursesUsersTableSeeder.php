<?php

use Illuminate\Database\Seeder;
use App\Models\CoursesUser;

class CoursesUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('courses_users')->truncate();
        Schema::enableForeignKeyConstraints();

        CoursesUser::create([
            'course_id' => '1',
            'user_id' => '3',
        ]);

        CoursesUser::create([
            'course_id' => '1',
            'user_id' => '4',
        ]);

        CoursesUser::create([
            'course_id' => '1',
            'user_id' => '7',
        ]);

        CoursesUser::create([
            'course_id' => '2',
            'user_id' => '3',
        ]);

        CoursesUser::create([
            'course_id' => '2',
            'user_id' => '4',
        ]);

        CoursesUser::create([
            'course_id' => '2',
            'user_id' => '7',
        ]);

        CoursesUser::create([
            'course_id' => '2',
            'user_id' => '8',
        ]);

        CoursesUser::create([
            'course_id' => '3',
            'user_id' => '3',
        ]);

        CoursesUser::create([
            'course_id' => '3',
            'user_id' => '7',
        ]);
    }
}
