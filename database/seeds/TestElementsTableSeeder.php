<?php

use Illuminate\Database\Seeder;
use App\Models\TestElement;

class TestElementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('test_elements')->truncate();
        Schema::enableForeignKeyConstraints();

        TestElement::create([
            'question' => 'Khi đang ở nhánh develop, ghép nhánh br1 vào nhánh develop',
            'choice' => '1.git merge br1
                2.git merge develop
                3.git merge develop br1
                4.git merge br1 develop',
            'answer' => '1',
            'test_id' => '1',
        ]);

        TestElement::create([
            'question' => 'Đăng ký kho truy cập từ xa',
            'choice' => '1.git remote repo1
                2.git remote add repo1
                3.git remote repo repo1
                4.git remote register repo1',
            'answer' => '2',
            'test_id' => '1',
        ]);

        TestElement::create([
            'question' => 'Xem sự khác biệt giữa các commit',
            'choice' => '1.git diff --c1 a3fbde --c2 d6aeba
                2.git diff a3fbde d6aeba
                3.git diff --commit a3fbde d6aeba
                4.git diff a3fbde --with d6aeba',
            'answer' => '2',
            'test_id' => '1',
        ]);

        TestElement::create([
            'question' => 'Xem nội dung của thay đổi',
            'choice' => '1.git show
                2.git view
                3.git summary
                4.git status',
            'answer' => '4',
            'test_id' => '1',
        ]);

        TestElement::create([
            'question' => 'Commit tệp staging',
            'choice' => '1.git commit
                2.git add -c
                3.git add --commit
                4.git commit --staged',
            'answer' => '1',
            'test_id' => '2',
        ]);

        TestElement::create([
            'question' => 'Hiển thị nhật ký trên 1 dòng',
            'choice' => '1.git remote repo1
                2.git remote add repo1
                3.git remote repo repo1
                4.git remote register repo1',
            'answer' => '2',
            'test_id' => '2',
        ]);

        TestElement::create([
            'question' => 'Xóa nhánh work1',
            'choice' => '1.git branch -d work1
                2.git branch delete work1
                3.git branch destroy work1
                4.git branch drop work1',
            'answer' => '2',
            'test_id' => '2',
        ]);

        TestElement::create([
            'question' => 'Thay đổi tên tệp',
            'choice' => '1.git mv foo.txt bar.txt
                2.git rename foo.txt bar.txt
                3.git change foo.txt bar.txt
                4.git chname foo.txt bar.txt',
            'answer' => '1',
            'test_id' => '2',
        ]);

        TestElement::create([
            'question' => 'Đăng ký kho truy cập từ xa',
            'choice' => '1.git remote repo1
                2.git remote add repo1
                3.git remote repo repo1
                4.git remote register repo1',
            'answer' => '2',
            'test_id' => '3',
        ]);

        TestElement::create([
            'question' => 'Đăng ký kho truy cập từ xa',
            'choice' => '1.git remote repo1
                2.git remote add repo1
                3.git remote repo repo1
                4.git remote register repo1',
            'answer' => '2',
            'test_id' => '3',
        ]);

        TestElement::create([
            'question' => 'Đăng ký kho truy cập từ xa',
            'choice' => '1.git remote repo1
                2.git remote add repo1
                3.git remote repo repo1
                4.git remote register repo1',
            'answer' => '2',
            'test_id' => '3',
        ]);

        TestElement::create([
            'question' => 'Đăng ký kho truy cập từ xa',
            'choice' => '1.git remote repo1
                2.git remote add repo1
                3.git remote repo repo1
                4.git remote register repo1',
            'answer' => '2',
            'test_id' => '3',
        ]);

        TestElement::create([
            'question' => 'Đăng ký kho truy cập từ xa',
            'choice' => '1.git remote repo1
                2.git remote add repo1
                3.git remote repo repo1
                4.git remote register repo1',
            'answer' => '2',
            'test_id' => '4',
        ]);

        TestElement::create([
            'question' => 'Đăng ký kho truy cập từ xa',
            'choice' => '1.git log --one
                2.git log --oneline
                3.git log -l 1
                4.git log --line 1',
            'answer' => '2',
            'test_id' => '4',
        ]);

        TestElement::create([
            'question' => 'Đăng ký kho truy cập từ xa',
            'choice' => '1.git remote repo1
                2.git remote add repo1
                3.git remote repo repo1
                4.git remote register repo1',
            'answer' => '2',
            'test_id' => '4',
        ]);

        TestElement::create([
            'question' => 'Đăng ký kho truy cập từ xa',
            'choice' => '1.git remote repo1
                2.git remote add repo1
                3.git remote repo repo1
                4.git remote register repo1',
            'answer' => '2',
            'test_id' => '4',
        ]);

        TestElement::create([
            'question' => 'Đăng ký kho truy cập từ xa',
            'choice' => '1.git remote repo1
                2.git remote add repo1
                3.git remote repo repo1
                4.git remote register repo1',
            'answer' => '2',
            'test_id' => '5',
        ]);

        TestElement::create([
            'question' => 'Đăng ký kho truy cập từ xa',
            'choice' => '1.git remote repo1
                2.git remote add repo1
                3.git remote repo repo1
                4.git remote register repo1',
            'answer' => '2',
            'test_id' => '5',
        ]);
    }
}
