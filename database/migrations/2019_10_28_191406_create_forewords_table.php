<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForewordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forewords', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedinteger('issue_id');
            $table->unsignedinteger('issue_number');
            $table->unsignedinteger('volume_number');
            $table->text('foreword');
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
        Schema::dropIfExists('forewords');
    }
}
