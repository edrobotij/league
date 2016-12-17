<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogoTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logo_team', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('logo_id')->unsigned()->index();
            $table->foreign('logo_id')
                  ->references('id')
                  ->on('logos')
                  ->onDelete('cascade');
            $table->integer('team_id')->unsigned()->index();
            $table->foreign('team_id')
                  ->references('id')
                  ->on('teams')
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
        Schema::drop('logo_team');
    }
}
