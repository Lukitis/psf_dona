<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('registrar', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('area', 20);
            $table->string('shift', 15);
            $table->string('phone', 15);
            $table->usingnedTinyInteger('age');
            $table->string('ci', 12)->unique();
            $table->timestamps();
        });

        DB::statement("
        ALTER TABLE registrar
        ADD CONSTRAINT registrar_are_check
        CHECK (are IN ('Academico', 'Docente', 'Administrativo'));
        ");
        DB::statement("
        ALTER TABLE registrar
        ADD CONSTRAINT registrar_shift_check
        CHECK (shift IN ('Mañana', 'Tarde', 'Noche'))
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrar');
    }
};
