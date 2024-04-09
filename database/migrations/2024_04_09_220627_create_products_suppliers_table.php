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
        Schema::create('products_suppliers', function (Blueprint $table) {
             $table->foreignId('supplier_id')
                    ->constrained()
                    ->cascadeOnDetele();
            $table->foreignId('product_id')
                    ->constrained()
                    ->cascadeOnDetele();
            $table->float('price', 8, 2);
            $table->enum('quality', ['low', 'medium', 'high']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_suppliers');
    }
};
