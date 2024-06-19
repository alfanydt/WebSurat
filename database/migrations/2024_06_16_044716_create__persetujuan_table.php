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
        Schema::create('Persetujuan', function (Blueprint $table) {
            $table->bigIncrements('id_persetujuan');
            $table->unsignedBigInteger('id_surat');
            $table->string('nama_penyetuju', 255); 
            $table->string('jabatan_penyetuju', 255);
            $table->boolean('status_penyetujuan', 'Disetujui', 'Ditolak');
            $table->timestamps();
            $table->foreign('id_surat')->references('id_surat')->on('Surat')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Persetujuan');
    }
};
