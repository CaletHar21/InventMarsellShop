<?php

/* CREACION DE LA TABLA DE MIGRACION USUARIOS - ESTA TABLA NOS INDICA LOS USUARIOS DEL SISTEMA CON SU NIVEL DE ROL EN SISTEMA 3/6/2026 */ 

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
       Schema::create('USUARIOS', function (Blueprint $table) {
    $table->id('USUARIOS_ID');
    $table->string('NOMBRE');
    $table->string('CORREO')->unique();
    $table->string('CONTRASENA');
    $table->foreignId('ROLES_ID')->constrained('ROLES')->onDelete('cascade');
    $table->rememberToken();
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
