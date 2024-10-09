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
        Schema::create('sesis', function (Blueprint $table) {
            $table->id('Id_sesi');
            $table->foreignId('Id_unit')->index()->constrained('units', 'Id_unit');
            $table->foreignId('Id_game')->index()->constrained('games', 'Id_game');
            $table->foreignId('Id_user')->index()->constrained('users', 'Id_user');
            $table->foreignId('Id_opsi')->index()->constrained('opsi_waktus', 'Id_opsi');
            $table->time('Waktu_mulai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sesis');
    }
};
