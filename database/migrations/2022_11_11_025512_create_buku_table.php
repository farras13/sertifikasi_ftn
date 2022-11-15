<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id('id_buku');
            $table->foreignId('id_kategori')->nullable()->constrained('kategori', 'id_kategori')
                ->onUpdate('no action')
                ->onDelete('no action');
            $table->string('judul')->nullable();
            $table->string('penerbit')->nullable();
            $table->string('halaman')->nullable();
            $table->integer('thn_terbit')->nullable();
            $table->string('kategori')->nullable();
            $table->string('harga_buku')->nullable();
            $table->string('gambar_buku')->nullable();
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
        Schema::dropIfExists('buku');
    }
};
