<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('historials', function (Blueprint $table) {
            $table->id();
            $table->string('titulo_tarea');
            $table->string('accion');
            $table->unsignedBigInteger('usuario_id');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('historials');
    }
};
