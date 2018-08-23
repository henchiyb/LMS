<?php

use Illuminate\Database\Seeder;
use App\Models\SpecializesUser;

class SpecializesUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('specializes_users')->truncate();
        Schema::enableForeignKeyConstraints();

        SpecializesUser::create([
            'specialize_id' => '1',
            'user_id' => '2',
        ]);

        SpecializesUser::create([
            'specialize_id' => '3',
            'user_id' => '2',
        ]);

        SpecializesUser::create([
            'specialize_id' => '5',
            'user_id' => '5',
        ]);

        SpecializesUser::create([
            'specialize_id' => '6',
            'user_id' => '6',
        ]);

        SpecializesUser::create([
            'specialize_id' => '1',
            'user_id' => '6',
        ]);

        SpecializesUser::create([
            'specialize_id' => '4',
            'user_id' => '5',
        ]);
    }
}
