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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->enum('status',['Pendiente','En progreso','Completada']);
            $table->enum('priority',['Baja','Media','Alta']);
            $table->enum('category',['Bugs','Aplicacion','Seguridad','Consultas generales']);
            $table->string('description');
            $table->string('comment')->nullable();
            $table->string('tag')->nullable();
            $table->string('file')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
