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
        Schema::create('vacancie_applies', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('vacancie_id');
            $table->string('name');
            $table->string('email');
            $table->string('mobile');
            $table->string('qualification');
            $table->string('experience');
            $table->string('current_ctc');
            $table->string('expected_ctc');
            $table->string('resume');
            $table->string('status')->default(1)->comment("1:applay,2:view,3:reject,4:accepted");
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
        Schema::dropIfExists('vacancie_applies');
    }
};
