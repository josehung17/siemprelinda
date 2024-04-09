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
        Schema::create('payments_purchases', function (Blueprint $table) {
            $table->foreignId('payment_id')
                    ->constrained()
                    ->cascadeOnDetele();
            $table->foreignId('purchase_id')
                    ->constrained()
                    ->cascadeOnDetele();
            $table->integer('count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments_purchases');
    }
};
