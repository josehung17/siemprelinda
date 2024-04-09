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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('trademark_id')
                    ->constrained()
                    ->cascadeOnDetele();
            $table->foreignId('unit_id')
                    ->constrained()
                    ->cascadeOnDetele();
            $table->string('name', 100);
            $table->integer('amountunit');
            $table->integer('amount');
            $table->float('price', 8, 2);
            $table->string('image', 250);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
