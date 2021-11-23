<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id('sid');
            $table->string('firstname', 60);
            $table->string('middlename', 60);
            $table->string('lastname', 60);
            $table->string('email', 100);
            $table->text('address');
            $table->enum('gender', ['M', 'F', 'O']);
            $table->integer('class')->default(1);
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
}
