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
        Schema::create('products_stores', function (Blueprint $table) {
            $table->foreignId('store_id')
                    ->constrained()
                    ->cascadeOnDetele();
            $table->foreignId('product_id')
                    ->constrained()
                    ->cascadeOnDetele();
            $table->float('utility', 2, 2);
            $table->integer('minstock');
            $table->integer('count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_stores');
    }
};
