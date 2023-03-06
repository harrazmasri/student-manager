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
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('ic_num')->nullable();
            $table->string('name')->nullable();
            $table->integer('age')->nullable();
            $table->string('gender')->nullable();
            $table->integer('phone_num')->nullable();
            $table->string('course')->nullable();
            $table->longText('address')->nullable();
            $table->string('nationality')->nullable();
            $table->string('religion')->nullable();
            $table->string('race')->nullable();
            $table->string('biography')->nullable();
            $table->string('language')->nullable();
            $table->string('skill')->nullable();
            $table->string('curricular')->nullable();
            $table->string('avatar')->nullable();
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
        Schema::dropIfExists('students');
    }
};
