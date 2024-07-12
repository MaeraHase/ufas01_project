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
        Schema::create('body_measurements', function (Blueprint $table) {
            $table->id('measurement_id');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->float('height');
            $table->float('weight');
            $table->float('bust');
            $table->float('under_bust')->nullable(); 
            $table->float('waist');
            $table->float('hips');
            $table->float('inseam')->nullable(); 
            $table->float('shoulder_width')->nullable(); 
            $table->float('sleeve_length')->nullable(); 
            $table->float('foot_size')->nullable(); 
            $table->json('concerns')->nullable(); // 悩み（JSON形式）
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('body_measurements');
    }
};
