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
        Schema::create('demo3s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('demo1_id');
            $table->unsignedBigInteger('demo2_id');
            $table->timestamps();

            $table->foreign('demo1_id')->references('id')->on('demo1s')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreign('demo2_id')->references('id')->on('demo2s')->cascadeOnDelete()->restrictOnDelete();

       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demo3s');
    }
};
