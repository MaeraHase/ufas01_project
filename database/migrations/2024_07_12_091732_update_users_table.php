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
            $table->string('address')->nullable()->change(); //ここを追加
            $table->string('phonenumber')->nullable()->change();    //ここを追加
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table)  {
          $table->dropColumn('address')->nullable(false)->change();
          $table->dropColumn('phonenumber')->nullable(false)->change();// 新しいカラムの削除
        });
            //
    } 
};
