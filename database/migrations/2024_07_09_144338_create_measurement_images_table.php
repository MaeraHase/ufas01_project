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
        Schema::create('measurement_images', function (Blueprint $table) {
            $table->id('image_id');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('image_url');
            $table->boolean('processed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('measurement_images');
    }
};
