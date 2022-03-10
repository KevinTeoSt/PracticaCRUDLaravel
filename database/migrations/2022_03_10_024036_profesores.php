<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Profesores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coursesandteachers', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            # $table->id();
            $table->string("Name");
            $table->string("LastName");
            $table->string("DateOfBirth");
            $table->string("Email");
            $table->string("Cel");
            $table->string("Course");
            $table->string("Schedule");
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
        Schema::dropIfExists('coursesandteachers');
    }

}
