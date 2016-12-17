<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('team_id')->unsigned()->index()->nullable();
            $table->foreign('team_id')
                  ->references('id')
                  ->on('teams')
                  ->onDelete('set null');
            $table->integer('number');
            $table->string('bats');
            $table->string('throws');
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
        Schema::drop('players');
    }
}
