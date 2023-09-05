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
        Schema::create('material_product', function (Blueprint $table) {
            $table->id();

         $table->unsignedBigInteger('product_id')->nullable();
         $table->foreign('product_id')->references('id')->on('products')->nullOnDelete();
    

        $table->unsignedBigInteger('material_id')->nullable();
        $table->foreign('material_id')->references('id')->on('materials')->nullOnDelete();



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('material_product');
    }
};
