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
        Schema::create('ctes', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->nullable();
            $table->string('nombre')->nullable();
            $table->string('direccion')->nullable();
            $table->string('nrc')->nullable();
            $table->string('nit')->nullable();
            $table->string('dui')->nullable();
            $table->string('telefono', 30)->nullable();
            $table->string('familia')->nullable();
            $table->string('categoria')->nullable();
            $table->string('pais')->nullable();
            $table->string('departamento')->nullable();
            $table->string('municipio')->nullable();
            $table->string('ae')->nullable();
            $table->string('email')->nullable();
            $table->string('contacto')->nullable();
            $table->string('agente')->nullable();
            $table->string('listaprecios')->nullable();
            $table->string('condicion')->nullable();
            $table->string('limitesaldo')->nullable();
            $table->string('saldomaximo')->nullable();
            $table->string('diastramite')->nullable();
            $table->string('zonaimpuestos')->nullable();
            $table->string('regimenfiscal')->nullable();
            $table->string('grupo')->nullable();
            $table->string('estatus')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ctes');
    }
};
