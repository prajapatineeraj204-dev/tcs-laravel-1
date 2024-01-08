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
        Schema::create('tcs_upload_course', function (Blueprint $table) {
            $table->id();
            $table->string('course_name')->nullable();
            $table->text('course_desc')->nullable();
            $table->text('playlist_name')->nullable();
            $table->string('scope')->nullable();
            $table->string('career')->nullable();
            $table->string('faculty_name')->nullable();
            $table->string('duration')->nullable();
            $table->string('validity')->nullable();
            $table->decimal('pricing',10,2)->nullable();
            $table->softDeletes();
       

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
        Schema::dropIfExists('tcs_upload_course');
    }
};
