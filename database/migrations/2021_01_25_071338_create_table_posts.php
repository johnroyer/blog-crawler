<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('url', 1500);
            $table->string('title');
            $table->text('content');
            $table->string('tags')->default('');
            $table->dateTime('post_date')->default('1970/01/01 00:00:00');
            $table->timestamps();

            $table->index('title');
            $table->index('tags');
            $table->index('post_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
