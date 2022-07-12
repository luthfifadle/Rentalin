<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTransaksiSewa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_sewa', function (Blueprint $table) {
            $table->id('noTransaksi');
            $table->dateTime('tglPesan');
            $table->dateTime('tglPinjam');
            $table->dateTime('tglKembaliRencana');
            $table->dateTime('tglKembaliRealisasi');
            $table->integer('denda')->default(0);
            $table->integer('kmPinjam')->default(0);
            $table->integer('kmKembali')->default(0);
            $table->integer('bbmPinjam')->default(0);
            $table->integer('bbmKembali')->default(0);
            $table->integer('biayaKerusakan')->default(0);
            $table->string('noKtp');
            $table->string('noPlat');
            $table->string('idSopir')->nullable();
            $table->string('nik');
            $table->softDeletes();
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
        Schema::dropIfExists('transaksi_sewa');
    }
}
