<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pack', function (Blueprint $table) {
            // $table->increments('id_pack');
            $table->id('id_pack');
            $table->string('desc_pack');
            $table->string('desc2_pack');
            $table->string('avatar_pack');
            $table->string('nom_pack');
            $table->string('video_pack');
            $table->string('cumul_point_pack')->nullable();
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
        Schema::dropIfExists('pack');
    }
}
