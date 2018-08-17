<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterColumnToCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->time('duration')->nullable()->change();
            $table->string('course_avatar_2')->nullable()->change();
            $table->string('course_avatar_3')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->integer('duration')->unsigned()->change();
            $table->string('course_avatar_2')->change();
            $table->string('course_avatar_3')->change();
        });
    }
}
