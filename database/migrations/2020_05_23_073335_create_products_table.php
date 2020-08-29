<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('status');
            $table->string('slug');
            $table->string('nama');
            $table->text('deskripsi');
            $table->integer('stock');
            $table->integer('harga');
            $table->boolean('is_discount')->nullable();
            $table->integer('berat');
            $table->string('barcode')->nullable();
            $table->bigInteger('id_merek')->unsigned()->nullable();
            $table->string('rating');
            $table->foreign('merek_id')->references('id')->on('mereks');
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
        Schema::dropIfExists('products');
    }
}
