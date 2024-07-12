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
        Schema::create('review', function (Blueprint $table) {
            $table->id('review_id');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->unsignedTinyInteger('stars'); // 星の数（5点満点中）
            $table->string('title'); // タイトル
            $table->text('body'); // 本文
            $table->foreignId('body_measurement_id')->nullable()->constrained('body_measurements','measurement_id')->onDelete('set null');
            $table->string('purchased_size'); // 購入サイズ
            $table->string('purchased_color')->nullable(); // 購入色
            $table->string('fit'); // サイズ感
            $table->timestamps(); // 投稿日時、更新日時
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('review');
    }
};
