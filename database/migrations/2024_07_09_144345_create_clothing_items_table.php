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
        Schema::create('clothing_items', function (Blueprint $table) {
            $table->id('item_id');
            $table->unsignedBigInteger('brand_id'); // 外部キーとしての brand_id
            $table->string('name');
            $table->string('category');
            $table->text('description');
            $table->string('size');
            //服のメジャメント
            $table->float('bust')->nullable(); 
            $table->float('under_bust')->nullable(); 
            $table->float('waist')->nullable(); 
            $table->float('hips')->nullable(); 
            $table->float('shoulder_width')->nullable(); 
            $table->float('sleeve_length')->nullable(); 
            $table->float('sleeve_width')->nullable(); 
            $table->float('cuff_width')->nullable(); 
            $table->float('pants_length')->nullable(); 
            $table->float('inseam')->nullable(); 
            $table->float('body_width')->nullable(); 
            $table->float('length')->nullable(); 
            $table->float('foot_size')->nullable(); 
            //その他
            $table->string('color');
            $table->string('material');
            $table->string('country_of_origin');
            $table->json('features');
            $table->decimal('price', 8, 2);
            $table->string('image_url');
            $table->timestamps();
            
            // brand_idを外部キーとして設定
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clothing_items');
    }
};
