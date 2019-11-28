<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('issues', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('journal');
            $table->string('cover')->nullable();
            $table->unsignedinteger('volume_year');
            $table->unsignedinteger('volume_id');
            $table->unsignedinteger('issue');
            $table->string('month');
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
        Schema::dropIfExists('issues');
    }
}
