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
        Schema::create('mentors', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->string('date_of_birth');
            $table->string('profile_image');
            $table->string('city_town');
            $table->string('pincode');
            $table->string('state');
            $table->set('mentor_type', ['Mentor to Students', 'Mentor to Professionals', 'Both of the above']);
            $table->string('current_company');
            $table->string('job_title');
            $table->string('domain_work');
            $table->set('highest_degree', ['CA (Chartered Accountant)', 'CS (Company Secretary)', 'CMA (Cost and Management Accountant)', 'B.Com.', 'Other']);
            $table->string('linkedin_profile');
            $table->string('work_experience');
            $table->string('career_guidance');
            $table->string('interview_processes_preparation');
            $table->string('post_qualification_experience');
            $table->string('mentorship_sessions');
            $table->set('specific_tool_topic',['yes', 'no']);
            $table->set('forms_of_content', ['blogs', 'Video Interview / Events (AMA)', 'Podcast', 'other']);
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
        Schema::dropIfExists('mentors');
    }
};
