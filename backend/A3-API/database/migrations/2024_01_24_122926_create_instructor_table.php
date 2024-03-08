<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('instructor', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('document')->unique()->comment('cédula');
            $table->string('fullname')->comment('Nombre Completo');
            $table->string('sena_email')->unique()->comment('Email Del Sena');
            $table->string('personal_email')->unique()->comment('Email Personal');
            $table->string('phone', 30)->nullable()->comment('Teléfono');
            $table->string('password')->comment('Contraseña');
            $table->string('type')->comment('Planta o Contratista');
            $table->string('profile')->comment('Perfil');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instructor');
    }
};
