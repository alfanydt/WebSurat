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
    Schema::create('lembur', function (Blueprint $table) {
        $table->bigIncrements('id_detail'); // Primary Key
        $table->unsignedBigInteger('id_surat'); // Foreign Key referencing the Surat table
        $table->string('nama', 255); // Nama of the person
        $table->integer('jumlah_hari'); // Number of days

        // Adding timestamps for created_at and updated_at
        $table->timestamps();

        // Foreign key constraint
        $table->foreign('id_surat')->references('id_surat')->on('Surat')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Lembur');
    }
};
