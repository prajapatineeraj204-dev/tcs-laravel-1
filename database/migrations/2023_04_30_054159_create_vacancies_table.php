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
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->index('user_id');
            $table->string('job_title', 255);
            $table->integer('job_opening')->unsigned(); 
            $table->string('city', 255);
            $table->string('salary', 255);
            $table->string('job_timings', 255);
            $table->string('intreview_time', 255);
            $table->string('job_description', 255);
            $table->string('company_name', 255);
            $table->string('user_name', 255);
            $table->string('phone_number', 255);
            $table->string('email', 255);
            $table->string('contact_persan', 255);
            $table->string('job_address', 255);
            $table->timestamps();
        });
        
    //     Schema::table('vacancies', function($table) {
    //         $table->foreign('user_id')->references('id')->on('users');
    //   });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacancies');
    }
};
