<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vartotojas', function (Blueprint $table) {
            $table->id();
            $table->string('vardas');
            $table->string('pavarde');
            $table->string('telefonas');
            $table->date('gim_data');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vartotojas');
    }
};