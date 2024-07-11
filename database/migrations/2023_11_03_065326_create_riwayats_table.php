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
        Schema::create('riwayats', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->enum('tipe', ['pengalaman', 'pendidikan']);
            $table->date('tgl_mulai');
            $table->date('tgl_akhir')->nullable();
            $table->string('info1')->nullable();
            $table->string('info2')->nullable();
            $table->text('isi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayats');
    }
};
