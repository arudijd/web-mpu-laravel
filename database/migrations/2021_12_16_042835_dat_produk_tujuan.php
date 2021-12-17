<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DatProdukTujuan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dat_produk_tujuan', function(Blueprint $table)
        {
            $table->id('id_produk_tujuan');
            $table->integer('id_produk');
            $table->string('tujuan');
       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dat_produk_tujuan');
    }
}
