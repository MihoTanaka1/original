<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->nullable()->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('title'); // 投稿のタイトルを保存するカラム
            $table->text('body');  // 投稿の本文を保存するカラム
            $table->string('place');//地域
            $table->string('yosan')->nullable(); // 投稿の予算を保存するカラム
            $table->string('kikan')->nullable(); // 投稿の期間を保存するカラム
            $table->string('ninnzuu')->nullable(); // 投稿の人数を保存するカラム
            $table->string('category')->nullable(); // 投稿のカテゴリーを保存するカラム
            $table->string('image_path')->nullable();  // 画像のパスを保存するカラム
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travels');
    }
}
