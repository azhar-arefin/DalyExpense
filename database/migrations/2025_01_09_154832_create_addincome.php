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
        Schema::create('addincome', function (Blueprint $table) {
            $table->id();
            $table->decimal('amount', 10, 2); 
            $table->string('income_title');
            $table->string('category');
            $table->date('current_date');
            $table->date('custom_date');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addincome');
    }
};
