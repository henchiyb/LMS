<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(SpecializesTableSeeder::class);
        $this->call(SpecializesUsersTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(CoursesUsersTableSeeder::class);
        $this->call(LessonsTableSeeder::class);
        $this->call(TestsTableSeeder::class);
        $this->call(TestElementsTableSeeder::class);
    }
}
