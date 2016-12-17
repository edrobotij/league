<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInningGameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inning_game', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('inning_id')->unsigned()->index()->nullable();
            $table->foreign('inning_id')
                  ->references('id')
                  ->on('innings')
                  ->onDelete('set null');
            $table->integer('game_id')->unsigned()->index();
            $table->foreign('game_id')
                  ->references('id')
                  ->on('games')
                  ->onDelete('cascade');
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
        Schema::drop('inning_game');
    }
}
