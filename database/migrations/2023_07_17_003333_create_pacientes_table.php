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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->int('id', 11)->unique();
            $table->string('nombres', 70);
            $table->string('apellidos', 70);
            $table->date('fecha_nacimiento');
            $table->string('direccion', 150);
            $table->string('telefono', 10);
            $table->int('id_medico', 11)->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
