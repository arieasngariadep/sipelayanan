<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTanggapanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanggapan', function (Blueprint $table) {
            $table->id();
            $table->string('no_tanggapan');
            $table->date('tgl_keluar');
            $table->unsignedBigInteger('users_id');
            // $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('pengaduan_id');
            // $table->foreign('pengaduan_id')->references('id')->on('pengaduan')->onDelete('cascade');
            $table->string('keterangan');
            $table->string('status');
            $table->string('dokumen');
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
        Schema::dropIfExists('tanggapan');
    }
}
