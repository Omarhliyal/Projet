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
        Schema::create('escales', function (Blueprint $table) {

    $table->id();

    $table->string('ship_name');
    $table->string('cargo');

    $table->date('arrival_date');
    $table->date('departure_date');

    $table->string('status');

    $table->foreignId('pilote_id')->constrained('pilotes')->cascadeOnDelete();
    $table->foreignId('machine_id')->constrained('machines')->cascadeOnDelete();
    $table->foreignId('quai_id')->constrained('quais')->cascadeOnDelete();
    $table->foreignId('service_id')->constrained('services')->cascadeOnDelete();

    $table->timestamps();

});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('escales');
    }
};
