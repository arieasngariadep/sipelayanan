<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaduanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id();
            $table->string('no_pengaduan');
            $table->date('tgl_pengaduan');
            $table->unsignedBigInteger('users_id');
            // $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('perihal');
            $table->string('desa_kelurahan');
            $table->unsignedBigInteger('kategori_id');
            // $table->foreign('kategori_id')->references('id')->on('kategori_pengaduan')->onDelete('cascade');
            $table->string('surat_pengantar');
            $table->string('fc_ktp');
            $table->string('fc_kk');
            $table->string('fc_karpeg');
            $table->string('fc_sk_terakhir');
            $table->string('bukti_lunas_pajak');
            $table->string('fc_ktp1');
            $table->string('fc_ktp2');
            $table->string('status');
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
        Schema::dropIfExists('pengaduan');
    }
}
