<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detils', function (Blueprint $table) {
            $table->string('id_produk')->primary();
            $table->string('slug')->unique();
            $table->string('nama_produk');
            $table->string('singkatan_produk')->nullable(true);
            $table->text('deskripsi_produk');
            $table->string('image_produk');
            $table->text('tujuan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detils');
    }
}
