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
        $table->string('name');   // Must match your form
        $table->string('port');   // Must match your form
        $table->date('date');     // Must match your form
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
