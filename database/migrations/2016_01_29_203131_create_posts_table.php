<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->longtext('body');
            $table->integer('author_id')->unsigned()->index()->nullable();
            $table->foreign('author_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('set null');
            $table->integer('league_id')->unsigned()->index();
            $table->foreign('league_id')
                  ->references('id')
                  ->on('leagues')
                  ->onDelete('cascade');
            $table->integer('division_id')->unsigned()->index()->nullable();
            $table->foreign('division_id')
                  ->references('id')
                  ->on('divisions')
                  ->onDelete('set null');
            $table->integer('team_id')->unsigned()->index()->nullable();
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
        Schema::drop('posts');
    }
}
