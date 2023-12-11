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
        Schema::create('items', function (Blueprint $table) {
            $table->id('itemId');
            $table->unsignedBigInteger('categoryId');
            $table->string('itemName');
            $table->string('brand');
            $table->integer('stock');
            $table->integer('currentPrice');
            $table->string('shelf');
            $table->string('description');
            $table->timestamps();

            $table->foreign('categoryId')->references('categoryId')->on('item_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
