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
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cantidad');
            $table->text('concepto');
            $table->date('fecha_pago');

            $table->unsignedBigInteger('colaborador_id'); 
            $table->foreign('colaborador_id')->references('id')->on('colaboradors'); 

            $table->unsignedBigInteger('tipo_pago_id'); 
            $table->foreign('tipo_pago_id')->references('id')->on('tipo_pagos'); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
