<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSopir extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sopir', function (Blueprint $table) {
            $table->id('idSopir');
            $table->string('namaSopir');
            $table->string('alamatSopir')->nullable();
            $table->string('teleponSopir')->nullable();
            $table->string('emailSopir')->nullable();
            $table->string('noSim');
            $table->string('tarifSopir');
            $table->tinyInteger('status')->comment('1. Tersedia, 2. Tidak Tersedia');
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
        Schema::dropIfExists('sopir');
    }
}
