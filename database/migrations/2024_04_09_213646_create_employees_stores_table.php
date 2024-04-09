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
        Schema::create('employees_stores', function (Blueprint $table) {
            $table->foreignId('employee_id')
                    ->constrained()
                    ->cascadeOnDetele();
            $table->foreignId('store_id')
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
        Schema::dropIfExists('employees_stores');
    }
};
