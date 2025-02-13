<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('product_id');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('product')->onUpdate('cascade');
            $table->integer('stock');
            $table->string('deliveryAdd');
            $table->integer('orderId')->unique();
            $table->string('paymentMethod');
            $table->string('customeDescription')->nullable();
            $table->string('customeImg')->nullable();
            $table->string('orderStatus')->comment('accepted, under process, undershippingprocess, delivered, rejected,Waiting')->default('Waiting');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
