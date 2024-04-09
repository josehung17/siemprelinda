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
        Schema::create('products_purchase_orders', function (Blueprint $table) {
            $table->foreignId('product_id')
                    ->constrained()
                    ->cascadeOnDetele();
            $table->foreignId('purchase_order_id')
                    ->constrained()
                    ->cascadeOnDetele();     
            $table->foreignId('supplier_id')
                    ->constrained()
                    ->cascadeOnDetele();                               
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_purchase_orders');
    }
};
