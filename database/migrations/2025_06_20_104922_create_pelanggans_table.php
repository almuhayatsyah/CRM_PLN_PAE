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
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->id();
            $table->string('id_pel', 100);
            $table->unsignedBigInteger('user_id');
            $table->string('kode_pln', 100);
            $table->string('nama_perusahaan', 100);
            $table->string('nama', 50);
            $table->string('kontak', 20);
            $table->decimal('kapasitas_daya', 10, 2);
            $table->enum('sektor', ['Sosial', 'Industri', 'Perumahan', 'Pemerintah', 'Bisnis', 'Lainnya']);
            $table->string('peruntukan', 100);
            $table->string('up3', 250);
            $table->string('ulp', 250);
            $table->enum('kriteria_prioritas', ['Prioritas1', 'Prioritas2', 'Prioritas3']);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('kode_pln')->references('kode_pln')->on('plns');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggans');
    }
};
