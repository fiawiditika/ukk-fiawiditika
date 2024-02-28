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
        //
            Schema::create('ukk_fia2024', function (Blueprint $table) {
                $table->id();
                $table->timestamps();
                $table->string('judul');
                $table->integer('bukuId');
                $table->text('penulis');
                $table->text('penerbit');
                $table->integer('tahunterbit');
                $table->unique(array('BukuId'));
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
