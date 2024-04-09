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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('supplier_id')
                    ->constrained()
                    ->cascadeOnDetele();
            $table->foreignId('exchage_rate_id')
                    ->constrained()
                    ->cascadeOnDetele();
            $table->foreignId('employee_id')
                    ->constrained()
                    ->cascadeOnDetele();
            $table->foreignId('iva_id')
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
        Schema::dropIfExists('purchases');
    }
};
