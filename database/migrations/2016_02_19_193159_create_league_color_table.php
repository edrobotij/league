<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeagueColorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('league_color', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('league_id')->unsigned()->index();
            $table->foreign('league_id')
                  ->references('id')
                  ->on('leagues')
                  ->onDelete('cascade');
            $table->integer('primary_color_id')->unsigned()->index();
            $table->foreign('primary_color_id')
                  ->references('id')
                  ->on('colors')
                  ->onDelete('cascade');
            $table->integer('secondary_color_id')->unsigned()->index();
            $table->foreign('secondary_color_id')
                  ->references('id')
                  ->on('colors')
                  ->onDelete('cascade');
            $table->integer('tertiary_color_id')->unsigned()->index();
            $table->foreign('tertiary_color_id')
                  ->references('id')
                  ->on('colors')
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
        Schema::drop('league_color');
    }
}
