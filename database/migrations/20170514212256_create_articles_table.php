<?php

use App\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticlesTable extends Migration
{
    public function up()
    {
        $this->schema->create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('author_id')->unsigned();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('teaser');
            $table->text('body');
            $table->string('image');
            $table->boolean('live')->default(0);
            $table->timestamps();

            $table->foreign('author_id')->references('id')->on('authors');
        });
    }

    public function down()
    {
        $this->schema->drop('articles');
    }
}
