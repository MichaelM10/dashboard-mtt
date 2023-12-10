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
        Schema::create('buy_price_histories', function (Blueprint $table) {
            $table->id('buyPriceHistoryId');
            $table->unsignedBigInteger('itemId');
            $table->unsignedBigInteger('supplierId');
            $table->integer('price');
            $table->date('purchaseDate');
            $table->timestamps();

            $table->foreign('itemId')->references('itemId')->on('items');
            $table->foreign('supplierId')->references('supplierId')->on('suppliers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buy_price_histories');
    }
};
