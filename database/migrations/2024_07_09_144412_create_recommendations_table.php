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
        Schema::create('recommendations', function (Blueprint $table) {
            $table->id('recommendation_id');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('body_measurement_id')->nullable()->constrained('body_measurements', 'measurement_id')->onDelete('set null');
            $table->foreignId('item_id')->constrained('clothing_items', 'item_id')->onDelete('cascade');
            $table->foreignId('similar_user_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recommendations');
    }
};
