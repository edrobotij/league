<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('home_id')->unsigned()->index()->nullable();
            $table->foreign('home_id')
                  ->references('id')
                  ->on('teams')
                  ->onDelete('set null');
            $table->integer('away_id')->unsigned()->index()->nullable();
            $table->foreign('away_id')
                  ->references('id')
                  ->on('teams')
                  ->onDelete('set null');
            $table->dateTime('gametime');
            $table->integer('field_id')->unsigned()->index()->nullable();
            $table->foreign('field_id')
                  ->references('id')
                  ->on('fields')
                  ->onDelete('set null');
            $table->integer('season_id')->unsigned()->index()->nullable();
            $table->foreign('season_id')
                  ->references('id')
                  ->on('seasons')
                  ->onDelete('set null');
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
        Schema::drop('games');
    }
}
