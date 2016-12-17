<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePositionPlayerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('position_player', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('position_id')->unsigned()->index();
            $table->foreign('position_id')
                  ->references('id')
                  ->on('positions')
                  ->onDelete('cascade');
            $table->integer('player_id')->unsigned()->index();
            $table->foreign('player_id')
                  ->references('id')
                  ->on('players')
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
        Schema::drop('position_player');
    }
}
