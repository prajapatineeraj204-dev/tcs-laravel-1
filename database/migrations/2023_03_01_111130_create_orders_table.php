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
        Schema::create('orders', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('billing_name');
            $table->string('billing_email');
            $table->string('billing_phone');
            $table->string('billing_address');
            $table->integer('billing_city');
            $table->integer('billing_state');
            $table->integer('billing_pincode');
            $table->string('shiping_name');
            $table->string('shiping_email');
            $table->string('shiping_phone');
            $table->string('shiping_address');
            $table->integer('shiping_city');
            $table->integer('shiping_state');
            $table->integer('shiping_pincode');
            $table->string('tranid');
            $table->integer('price');
            $table->integer('delevery_type')->default('1')->comment('1 for pending , 2 shiped , 3 deliverd, 4 refund , 5 faild');
            $table->integer('payment_type')->integer()->comment('1 for cod, 2 for online');
            $table->integer('status')->default(1)->comment('1 for active , 0 for In active');
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
        Schema::dropIfExists('orders');
    }
};
