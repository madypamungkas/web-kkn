<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilPendataanWargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_pendataan_warga', function (Blueprint $table) {
          $table->id();
          $table->string('uniq_pengisian');
          $table->integer('warga_id');
          $table->date('tanggal_pendataan');
          //$table->integer('hasil_skors');
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
        Schema::dropIfExists('hasil_pendataan_warga');
    }
}
