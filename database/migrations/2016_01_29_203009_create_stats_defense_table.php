<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatsDefenseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stats_defense', function (Blueprint $table) {
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
            $table->tinyInteger('gs')->unsigned();
            $table->decimal('inn', 4, 1);
            $table->smallInteger('ch')->unsigned();
            $table->smallInteger('po')->unsigned();
            $table->smallInteger('a')->unsigned();
            $table->tinyInteger('e')->unsigned();
            $table->tinyInteger('dp')->unsigned();
            $table->tinyInteger('pb')->unsigned()->nullable();
            $table->tinyInteger('wp')->unsigned()->nullable();
            $table->tinyInteger('sb')->unsigned()->nullable();
            $table->tinyInteger('cs')->unsigned()->nullable();
            $table->tinyInteger('pof')->unsigned()->nullable();
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
        Schema::drop('stats_defense');
    }
}
