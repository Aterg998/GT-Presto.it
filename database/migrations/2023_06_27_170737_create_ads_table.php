<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->float('price', 10, 2); //Colonna di prezzo. Float = numero con decimali, primo numero = cifre prima della virgola, secondo numero = cifre dopo la virgola
            $table->string('description');
            $table->file('image');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ads');
    }
};
