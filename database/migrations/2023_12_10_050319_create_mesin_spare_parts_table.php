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
        Schema::create('mesin_spare_parts', function (Blueprint $table) {
            $table->id('mesinSpareId');
            $table->unsignedBigInteger('mesinId');
            $table->unsignedBigInteger('spareId');

            $table->foreign('mesinId')->references('itemId')->on('items');
            $table->foreign('spareId')->references('itemId')->on('items');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mesin_spare_parts');
    }
};