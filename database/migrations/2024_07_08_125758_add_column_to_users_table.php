<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->BOOLEAN('sex')->nullable();  //ここを追加
            $table->string('address_code')->nullable(); 
            $table->string('address'); //ここを追加
            $table->string('phonenumber');       //ここを追加
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table)  {
          $table->dropColumn('sex'); 
          $table->dropColumn('address_code'); 
          $table->dropColumn('address');
          $table->dropColumn('phonenumber');// 新しいカラムの削除
        });
            //
    } 
};
