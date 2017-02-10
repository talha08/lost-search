<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoundAttachmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('found_attachment', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->string('icon');
            $table->integer('found_id')->unsigned()->index();
            $table->foreign('found_id')->references('id')->on('founds')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::drop('found_attachment');
    }
}
