<?php

use Illuminate\Database\Seeder;
use App\Models\Test;

class TestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('tests')->truncate();
        Schema::enableForeignKeyConstraints();

        Test::create([
            'lesson_id' => '1',
            'courses_user_id' => '1',
        ]);

        Test::create([
            'lesson_id' => '2',
            'courses_user_id' => '1',
        ]);

        Test::create([
            'lesson_id' => '1',
            'courses_user_id' => '2',
        ]);

        Test::create([
            'lesson_id' => '2',
            'courses_user_id' => '2',
        ]);

        Test::create([
            'lesson_id' => '3',
            'courses_user_id' => '3',
        ]);

        Test::create([
            'lesson_id' => '4',
            'courses_user_id' => '4',
        ]);

        Test::create([
            'lesson_id' => '4',
            'courses_user_id' => '5',
        ]);

        Test::create([
            'lesson_id' => '6',
            'courses_user_id' => '7',
        ]);
    }
}
