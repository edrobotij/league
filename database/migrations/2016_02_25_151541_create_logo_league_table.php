<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogoLeagueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logo_league', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('logo_id')->unsigned()->index();
            $table->foreign('logo_id')
                  ->references('id')
                  ->on('logos')
                  ->onDelete('cascade');
            $table->integer('league_id')->unsigned()->index();
            $table->foreign('league_id')
                  ->references('id')
                  ->on('leagues')
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
        Schema::drop('logo_league');
    }
}
