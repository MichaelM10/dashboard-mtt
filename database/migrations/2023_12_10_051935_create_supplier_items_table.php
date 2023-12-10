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
        Schema::create('supplier_items', function (Blueprint $table) {
            $table->unsignedBigInteger('supplierId');
            $table->unsignedBigInteger('itemId');
            $table->timestamps();

            $table->foreign('supplierId')->references('supplierId')->on('suppliers');
            $table->foreign('itemId')->references('itemId')->on('items');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supplier_items');
    }
};
