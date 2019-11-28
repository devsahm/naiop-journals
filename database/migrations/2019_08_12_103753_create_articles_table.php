<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('writer_id')->nullable();
            $table->boolean('published')->default(false);
            $table->boolean('confirmed')->default(false);
            $table->boolean('admin')->default(false);
            $table->string('email')->nullable();
            $table->string('title');
            $table->string('author');
            $table->string('keywords');
            $table->string('pagenumber')->nullable();
            $table->string('university')->nullable();
            $table->string('price')->nullable();
            $table->text('abstract');
            $table->text('uploadone')->nullable();
            


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
        Schema::dropIfExists('articles');
    }
}
