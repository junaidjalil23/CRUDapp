<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tag', function (Blueprint $table) {
            $table->id('pt_id');
            $table->unsignedBigInteger('posts_id');
            $table->unsignedBigInteger('tags_id');
            $table->timestamps();
            $table->foreign('posts_id')->references('posts_id')->on('posts');
            $table->foreign('tags_id')->references('tags_id')->on('tags');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts_tags');
    }
}
