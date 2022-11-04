<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('user_id');
            $table->string('kode_payment');
            $table->string('kode_trx');
            $table->unsignedBigInteger('total_item');
            $table->unsignedBigInteger('total_harga');
            $table->unsignedBigInteger('kode_unik');
            $table->string('status')->nullable();
            $table->string('resi')->nullable();
            $table->string('kurir')->nullable();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('detail_lokasi')->nullable();
            $table->string('deskripsi')->nullable();
            $table->string('metode')->nullable();
            $table->timestamp('expired_at')->nullable();
            $table->timestamps();

            //$table->foreign('customer_id')->references('id')->on('customers')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
