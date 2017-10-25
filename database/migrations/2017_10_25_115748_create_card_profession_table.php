<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardProfessionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_profession', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('card_id')->unsigned()->index();
            $table->integer('profession_id')->unsigned()->index();
            $table->timestamps();
            
            // 外部キー設定
            $table->foreign('card_id')->references('id')->on('cards');
            $table->foreign('profession_id')->references('id')->on('professions');
            
            // 組み合わせの重複を許さない
            $table->unique(['card_id', 'profession_id']);
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('card_profession');
    }
}
