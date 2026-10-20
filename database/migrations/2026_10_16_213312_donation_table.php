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
        Schema::create('donation', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->foreignId('registrar_id')->constrained('registrar')->onDelete('set null');
            $table->foreignId('collector_id')->constrained('collector')->onDelete('set null');
            $table->string('category')->nullable();
            $table->integer('quantity')->nullable();
            $table->foreignId('donor_id')->constrained('donor')->onDelete('set null');
            $table->date('registration_date');
            $table->foreignId('organization_id')->constrained('organization')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donation');
    }
};
