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
            $table->increments('id');
            $table->string('title', 50);
            $table->string('excerpt', 255);
            $table->text('content');
            $table->dateTime('date_start');
            $table->dateTime('date_end');
            $table->string('slug');
            $table->string('thumbnail_link');
            $table->string('url_site');
            $table->enum('status', ['publish', 'un-publish'])->default('publish');
            $table->timestamps();
            $table->softDeletes();

            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('SET NULL');

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
