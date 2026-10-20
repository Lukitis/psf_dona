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
        Schema::create('collector', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->string('faculty', 50);
            $table->enum('area', ['Academico', 'Docente', 'Administrativo']);
            $table->enum('shift', ['Mañana', 'Tarde', 'Noche']);
            $table->string('phone', 30);
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
        Schema::dropIfExists('collector');
    }
};
