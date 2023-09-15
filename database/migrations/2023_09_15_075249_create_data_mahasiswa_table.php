<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_mahasiswa', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('nama',64);
            $table->integer('nim')->unique();
            $table->string('nama_kegiatan');
            $table->string('whatsapp');
            $table->text('nama_prodi');
            $table->integer('progress')->default(0); //0 blm acc, 1 sudah di acc, 2 sudah pemilihan dosbing, 3 sudah penilaian, 4 sudah konversi  
            //$table->json('progress');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_mahasiswa');
    }
};
