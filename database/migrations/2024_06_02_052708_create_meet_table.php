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
        Schema::create('meet', function (Blueprint $table) {
            $table->id();
            $table->string('topik');
            $table->string('deskripsi');
            $table->dateTime('jam_mulai');
            $table->dateTime('jam_berakhir');
            $table->date('tanggal');
            $table->string('link');
            $table->string('materi');
            $table->bigInteger('total_remaja');
            $table->integer('mentor_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meet');
    }
};
