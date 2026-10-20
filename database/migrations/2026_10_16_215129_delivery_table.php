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
        Schema::create('delivery', function (Blueprint $table) {
            $table->id();
            $table->foreignId('donation_id')->constrained('donation')->cascadeOnDelete();
            $table->foreignId('registrar_id')->constrained('registrar')->cascadeOnDelete();
            $table->foreignId('collector_id')->constrained('collector')->cascadeOnDelete();
            $table->date('delivery_date');
            $table->foreignId('organization_id')->constrained('organization')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery');
    }
};
