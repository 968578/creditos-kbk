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
        Schema::create('debtors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cedula');
            $table->string('cargo');
            $table->foreignId('business_id')->nullable()->constrained('businesses')->onDelete('SET NULL');
            $table->foreignId('celula_id')->nullable()->constrained('celulas')->onDelete('SET NULL');
            $table->foreignId('status_debtor_id')->constrained('status_debtors');
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
        Schema::dropIfExists('debtors');
    }
};
