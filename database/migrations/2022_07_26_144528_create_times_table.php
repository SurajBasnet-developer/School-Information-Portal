<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('times', function (Blueprint $table) {
            $table->id();
            $table->string('grade');
            $table->string('subjectone');
            $table->string('subjecttwo');
            $table->string('subjectthree');
            $table->string('subjectfour');
            $table->string('subjectfive');
            $table->string('subjectsix');
            $table->string('subjectseven');
            $table->string('subjecteight');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('times');
    }
};
