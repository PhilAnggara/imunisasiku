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
        Schema::create('imunisasi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_anak');
            $table->foreignId('id_jenis_imunisasi');
            $table->foreignId('id_kelurahan');
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->string('nama_ibu');
            $table->string('nama_ayah');
            $table->string('no_hp');
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imunisasi');
    }
};
