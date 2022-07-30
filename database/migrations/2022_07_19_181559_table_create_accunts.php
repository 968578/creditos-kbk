<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('monto');
            $table->date('fecha_solicitud');
            $table->date('fecha_desembolso')->nullable();
            $table->string('numero_cuotas');
            $table->string('valor_cuota');
            $table->date('fecha_aprobacion')->nullable();
            $table->string('estado');
            $table->string('cuotas_pagadas');
            $table->foreignId('debtor_id')->constrained('debtors')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
};
