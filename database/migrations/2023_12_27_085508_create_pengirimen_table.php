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
        Schema::create('pengirimen', function (Blueprint $table) {
            $table->id();
            $table->string('resi')->unique();
            $table->date('tgl_kirim');
            $table->string('pengirim');
            $table->unsignedBigInteger('rute_id');
            $table->foreign('rute_id')->references('id')->on('rutes');
            $table->string('penerima');
            $table->string('no_telp_penerima');
            $table->unsignedBigInteger('kat_id');
            $table->foreign('kat_id')->references('id')->on('kategoris');
            $table->integer('pcs');
            $table->integer('total_harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengirimen');
    }
};
