<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatsOffenseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stats_offense', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('player_id')->unsigned()->index()->nullable();
            $table->foreign('player_id')
                  ->references('id')
                  ->on('players')
                  ->onDelete('set null');
            $table->integer('game_id')->unsigned()->index()->nullable();
            $table->foreign('game_id')
                  ->references('id')
                  ->on('games')
                  ->onDelete('set null');
            $table->decimal('inn', 4, 1);
            $table->smallInteger('pa')->unsigned();
            $table->smallInteger('ab')->unsigned();
            $table->tinyInteger('r')->unsigned();
            $table->tinyInteger('h')->unsigned();
            $table->tinyInteger('2b')->unsigned();
            $table->tinyInteger('3b')->unsigned();
            $table->tinyInteger('hr')->unsigned();
            $table->tinyInteger('rbi')->unsigned();
            $table->tinyInteger('sb')->unsigned();
            $table->tinyInteger('cs')->unsigned();
            $table->tinyInteger('bb')->unsigned();
            $table->tinyInteger('so')->unsigned();
            $table->tinyInteger('gdp')->unsigned();
            $table->tinyInteger('hbp')->unsigned();
            $table->tinyInteger('sh')->unsigned();
            $table->tinyInteger('sf')->unsigned();
            $table->tinyInteger('ibb')->unsigned();
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
        Schema::drop('stats_offense');
    }
}
