<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukHukumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk_hukums', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul');
            $table->string('nomor');
            $table->integer('tahun');
            $table->tinyText('status');
            $table->text('sumber');
            $table->text('abstrak');
            $table->date('tanggal_penetapan');
            $table->date('tanggal_diundangkan');
            $table->integer('opd_id');
            $table->integer('jenis_peraturan_id');
            $table->integer('kategori_hukum_id');
            $table->tinyText('draft');
            $table->string('file');
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
        Schema::dropIfExists('produk_hukum');
    }
}
