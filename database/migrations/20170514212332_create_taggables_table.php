<?php

use App\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTaggablesTable extends Migration
{
    public function up()
    {
        $this->schema->create('taggables', function (Blueprint $table) {
            $table->integer('tag_id')->unsigned();
            $table->integer('taggable_id');
            $table->string('taggable_type');

            $table->foreign('tag_id')->references('id')->on('tags');
        });
    }

    public function down()
    {
        $this->schema->drop('taggables');
    }
}
