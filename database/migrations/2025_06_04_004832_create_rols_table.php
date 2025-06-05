<?php

/* CREACION DE LA TABLA DE MIGRACION ROL - ESTA TABLA NOS INDICA EL NIVEL DE ACCESO   3/6/2026 */ 

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
       Schema::create('ROLES', function (Blueprint $table) {
       $table->id('ROLES_ID');
       $table->string('NOMBRE');
       $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rols');
    }
};
