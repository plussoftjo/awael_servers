<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('home_number');
            $table->string('mobile_number');
            $table->string('email');
            $table->string('address');
            $table->string('zip_code');
            $table->string('type');
            $table->string('front_image');
            $table->string('back_image');
            $table->string('third_image')->nullable();
            $table->text('note')->nullable();
            $table->integer('profile_id')->nullable();
            $table->string('profile_name')->nullable();
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
}
