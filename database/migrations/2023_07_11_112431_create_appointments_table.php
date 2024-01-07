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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mentor_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->dateTime('date');
            $table->time('time');
            $table->string('area');
            $table->string('city');
            $table->string('state');
            $table->string('post_code');
            $table->timestamps();
            $table->foreign('mentor_id')->references('id')->on('mentors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
};
