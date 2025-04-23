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
        Schema::create('minoristas', function (Blueprint $table) {
            $table->id('minorista_id');
            $table->string('tipo_negocio');
            $table->string('rut', 20);
            $table->string('nombre_negocio');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('minoristas');
    }
};
