<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatsPitchingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stats_pitching', function (Blueprint $table) {
            $table->increments('id');
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
            $table->tinyInteger('w')->unsigned();
            $table->tinyInteger('l')->unsigned();
            $table->tinyInteger('gs')->unsigned();
            $table->tinyInteger('gf')->unsigned();
            $table->tinyInteger('cg')->unsigned();
            $table->tinyInteger('sho')->unsigned();
            $table->tinyInteger('sv')->unsigned();
            $table->decimal('ip', 4, 1);
            $table->tinyInteger('h')->unsigned();
            $table->tinyInteger('r')->unsigned();
            $table->tinyInteger('er')->unsigned();
            $table->tinyInteger('hr')->unsigned();
            $table->tinyInteger('bb')->unsigned();
            $table->tinyInteger('ibb')->unsigned();
            $table->smallInteger('so')->unsigned();
            $table->smallInteger('hbp')->unsigned();
            $table->tinyInteger('bk')->unsigned();
            $table->tinyInteger('wp')->unsigned();
            $table->smallInteger('bf')->unsigned();
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
        Schema::drop('stats_pitching');
    }
}
