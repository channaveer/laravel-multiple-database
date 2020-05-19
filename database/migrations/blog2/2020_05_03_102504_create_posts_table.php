<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Query\Expression;
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
        Schema::connection('mysql2')->create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on(new Expression('blog1.users'))->onDelete('cascade');
            $table->string('title');
            $table->longText('body');
            $table->dateTime('published_on')->nullable();
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
        \DB::select("SET FOREIGN_KEY_CHECKS = 0");
        Schema::connection('mysql2')->dropIfExists('posts');
        \DB::select("SET FOREIGN_KEY_CHECKS = 1");
    }
}
