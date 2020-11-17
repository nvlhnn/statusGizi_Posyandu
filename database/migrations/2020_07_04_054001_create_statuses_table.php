<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('baby_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->string('status', 255);
            $table->integer('height');
            $table->integer('weight');
            $table->integer('age');
            $table->integer('index');
            $table->string('saran', 255);
            $table->timestamps();
        });
        Schema::table('statuses', function (Blueprint $table) {
            $table->foreign('baby_id')->references('id')->on('babies');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('statuses');
    }
}
