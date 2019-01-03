<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('publisher_id');
            $table->integer('category_id');
            $table->integer('author_id');
            $table->string('title');
            $table->string('preview');
            $table->string('picture');
            $table->integer('page');
            $table->integer('num_like');
            $table->integer('num_follow');
            $table->float('avg_rate');
            $table->integer('num_comment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
