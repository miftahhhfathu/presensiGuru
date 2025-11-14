<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id();
            $table->string('hari', 10);

            $table->foreignId('guru_id')
                ->constrained('guru')
                ->onDelete('cascade');

            $table->foreignId('mapel_id')
                ->constrained('mapel')
                ->onDelete('cascade');

            $table->foreignId('kelas_id')
                ->constrained('kelas')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jadwal');
    }
};
