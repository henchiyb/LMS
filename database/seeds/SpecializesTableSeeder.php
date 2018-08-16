<?php

use Illuminate\Database\Seeder;
use App\Models\Specialize;

class SpecializesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('specializes')->truncate();
        Schema::enableForeignKeyConstraints();

        Specialize::create([
            'name' => 'Toán',
            'teaching_grade' => '6, 9, 10',
        ]);
        
        Specialize::create([
            'name' => 'Văn học',
            'teaching_grade' => '7, 8',
        ]);

        Specialize::create([
            'name' => 'Địa lý',
            'teaching_grade' => '4, 5, 9, 11',
        ]);

        Specialize::create([
            'name' => 'Giáo dục công dân',
            'teaching_grade' => '9',
        ]);

        Specialize::create([
            'name' => 'Hóa học',
            'teaching_grade' => '9, 10, 11, 12',
        ]);

        Specialize::create([
            'name' => 'Lịch sử',
            'teaching_grade' => '10, 12',
        ]);

        Specialize::create([
            'name' => 'Sinh học',
            'teaching_grade' => '6, 7, 8',
        ]);

        Specialize::create([
            'name' => 'Thể dục',
            'teaching_grade' => '10, 11, 12',
        ]);
    }
}
