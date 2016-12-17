<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_user', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('player_id')->unsigned()->index()->nullable();
            $table->foreign('player_id')
                  ->references('id')
                  ->on('players')
                  ->onDelete('set null');
            $table->integer('user_id')->unsigned()->index()->nullable();
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
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
        Schema::drop('player_user');
    }
}
