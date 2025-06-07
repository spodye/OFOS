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
        Schema::create('cartitems', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('cartId');
            $table->foreign('cartId')->references('id')->on('carts');
            $table->unsignedBigInteger('productId');
            $table->foreign('productId')->references('id')->on('products');
            $table->string('productname');
            $table->integer('price')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cartitems');
    }
};
