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
        Schema::create('donor', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('faculty', 50);
            $table->string('carrer', 40)->nullable();
            $table->enum('area', ['Academico', 'Docente', 'Administrativo', 'Estudiante']);
            $table->enum('shift', ['Mañana', 'Tarde', 'Noche']);
            $table->string('phone', 20);
            $table->unsingedTinyInteger('age');
            $table->string('ci', 12)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donor');
    }
};
