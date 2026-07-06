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
            $table->string('payment_amount');
            $table->integer('sub_total',11);
            $table->integer('tax',11);
            $table->integer('discount',11);
            $table->integer('service_charge',11);
            $table->integer('total',11);
            $table->integer('payment_method',11);
            $table->integer('total_item',11);
            $table->integer('id_kasir',11);
            $table->string('nama_kasir');
            $table->string('transaction_time');
            $table->timestamps();
            $table->enum('order_type', ['dinein','reservation'])->default(null);
            $table->bigInteger('id_reservasi')->unsigned()->nullable();
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
