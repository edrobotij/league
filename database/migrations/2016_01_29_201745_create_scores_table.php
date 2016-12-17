<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('inning_game_id')->unsigned()->index();
            $table->foreign('inning_game_id')
                  ->references('id')
                  ->on('inning_game')
                  ->onDelete('cascade');
            $table->integer('team_id')->unsigned()->index()->nullable();
            $table->foreign('team_id')
                  ->references('id')
                  ->on('teams')
                  ->onDelete('set null');
            $table->integer('runs');
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
        Schema::drop('scores');
    }
}
