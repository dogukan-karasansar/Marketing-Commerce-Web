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
            $table->id();
            $table->string('name');
            $table->longText('description')->nullable();
            $table->double('price');
            $table->text('image');
            $table->unsignedBigInteger('customer');
            $table->unsignedBigInteger('category');
            $table->text('product_number');
            $table->integer('stock_amount');
            $table->enum('status', ['active', 'passive', 'pending'])->default('pending');
            $table->double('rating');
            $table->timestamps();
            $table->foreign('customer')->references('id')->on('customers');
            $table->foreign('category')->references('id')->on('categories');
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
