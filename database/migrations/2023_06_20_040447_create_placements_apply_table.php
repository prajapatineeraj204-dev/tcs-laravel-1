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
        Schema::create('placements_apply', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->unsignedBigInteger('application_id')->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('phone', 15);
            $table->string('education')->nullable();
            $table->string('course_name');
            $table->date('start_date');
            $table->date('end_date');
            $table->decimal('precentage', 5,2);
            $table->string('company_name');
            $table->string('designation');
            $table->string('skills');
            $table->date('skill_start');
            $table->date('skill_end');
            $table->string('cover_latter');
            $table->string('file_path');
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
        Schema::dropIfExists('placements_apply');
    }
};
