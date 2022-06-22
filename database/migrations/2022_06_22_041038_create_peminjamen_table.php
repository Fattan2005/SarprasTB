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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->foreignId('barang_id');
            $table->string('nama_peminjam');
            $table->enum('status_peminjam', ['guru', 'siswa']);
            $table->string('nama_kelas');
            $table->integer('jumlah_pinjam');
            $table->enum('status', ['dipinjam', 'dikembalikan']);
            $table->string('keterangan');
            $table->string('nama_operator');
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
        Schema::dropIfExists('peminjamen');
    }
};
