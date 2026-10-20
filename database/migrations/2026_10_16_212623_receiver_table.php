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
        Schema::create('receiver', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->foreignId('organization_id')->constrained('organization')->onDelete('set null');
            $table->string('phone', 20);
            $table->unsingedTinyInteger('age');
            $table->string('ci', 12)->unique();
            $table->string('beneficiary', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receiver');
    }
};
