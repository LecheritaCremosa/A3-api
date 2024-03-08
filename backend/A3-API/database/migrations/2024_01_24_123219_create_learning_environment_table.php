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
        Schema::create('learning_environment', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->comment('Nombre');
            $table->integer('capacity')->comment('Capacidad');
            $table->integer('area_mt2')->comment('Area En Metros Cuadrados');
            $table->string('floor')->comment('Piso');
            $table->string('inventory')->comment('inventario');
            $table->foreignId('type_id')->constrained('environment_type')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('location_id')->constrained('location')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->string('status')->comment('Estado: ACTIVO, INNACTIVO');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('learning_environment');
    }
};
