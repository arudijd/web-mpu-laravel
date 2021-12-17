<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Client extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function(Blueprint $table)
        {
            $table->id('id_client');
            $table->integer('id_produk');
            $table->integer('id_prov');
            $table->string('nama_kab');
            $table->string('gambar');
            $table->timestamp('create_date');
            $table->integer('create_by');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client');
    }
}
