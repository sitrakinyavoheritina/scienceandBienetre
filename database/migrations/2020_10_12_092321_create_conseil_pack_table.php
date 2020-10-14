<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConseilPackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conseil_pack', function (Blueprint $table) {
            $table->id('id_cpack');
            // $table->increments('id_conseil');
            $table->string('conseil_photo');
            $table->unsignedBigInteger('id_conseil_pack');
            // $table->bigInteger('id_conseil_pack')->unsigned();
            // $table-> unsignedBigInteger('id_conseil_pack')->onDelete('cascade');
            $table->string('conseil_description');
            $table->foreign('id_conseil_pack')->references('id_conseil_pack')->on('pack');
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
        Schema::dropIfExists('conseil_pack');
    }
}
