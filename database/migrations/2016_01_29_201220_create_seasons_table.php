<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeasonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seasons', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->smallInteger('year')->unsigned();
            $table->string('name');
            $table->integer('league_id')->unsigned()->index()->nullable();
            $table->foreign('league_id')
                  ->references('id')
                  ->on('leagues')
                  ->onDelete('cascade');
            $table->integer('division_id')->unsigned()->index()->nullable();
            $table->foreign('division_id')
                  ->references('id')
                  ->on('divisions')
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
        Schema::drop('seasons');
    }
}
