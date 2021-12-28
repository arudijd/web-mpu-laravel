<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeunggulansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keunggulans', function (Blueprint $table) {
            $table->id();
            $table->string('keunggulan_id');
            $table->string('image_keunggulan');
            $table->string('judul_keunggulan');
            $table->string('detil_keunggulan');
            $table->foreign('keunggulan_id')->references('id_produk')->on('detils');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keunggulans');
    }
}
