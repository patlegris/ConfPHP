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
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('title', 50);
            $table->string('excerpt', 500);
            $table->text('content');
            $table->dateTime('date_start');
            $table->dateTime('date_end');
            $table->timestamps();
            $table->string('slug', 100);
            $table->string('thumbnail_link', 200);
            $table->string('url_site', 200);
            $table->enum('status', ['publish', 'unpublish']);

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
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign('posts_user_id_foreign');
        });

        Schema::drop('posts');
    }
}
}