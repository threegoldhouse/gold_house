<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('pan_baidu_url_1');
            $table->string('pan_weipan_url_2');
            $table->string('other_url_3');
            $table->string('other_url_4');
            $table->string('picture');
            $table->string('info');
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
        Schema::dropIfExists('book_detail');
    }
}
