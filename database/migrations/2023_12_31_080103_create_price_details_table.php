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
        Schema::create('price_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('price_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('tier_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->integer('price');
            $table->boolean('is_tier');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prices_detail');
    }
};
