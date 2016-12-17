<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeaguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leagues', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->longtext('description');
            $table->string('city');
            $table->string('state');
            $table->integer('commissioner_id')->unsigned()->index()->nullable();
            $table->foreign('commissioner_id')
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
        Schema::drop('leagues');
    }
}
