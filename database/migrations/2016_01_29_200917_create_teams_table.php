<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('league_id')->unsigned()->index()->nullable();
            $table->foreign('league_id')
                  ->references('id')
                  ->on('leagues')
                  ->onDelete('set null');
            $table->integer('division_id')->unsigned()->index()->nullable();
            $table->foreign('division_id')
                  ->references('id')
                  ->on('divisions')
                  ->onDelete('set null');
            $table->integer('manager_id')->unsigned()->index()->nullable();
            $table->foreign('manager_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('set null');
            $table->string('name');
            $table->string('city');
            $table->string('state');
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
        Schema::drop('teams');
    }
}
