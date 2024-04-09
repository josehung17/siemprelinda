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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('ci', 10);
            $table->foreignId('department_id')
                    ->constrained()
                    ->cascadeOnDetele();
            $table->string('name', 100);
            $table->string('lastname', 100);
            $table->string('phone', 14)->unique()->nullable();
            $table->string('address', 250)->nullable();
            $table->string('email', 100)->unique()->nullable();    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
