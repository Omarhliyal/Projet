<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
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
            $table->foreignId('vedette_id')->constrained('vedettes')->cascadeOnDelete();
            $table->foreignId('equipe_vedette_id')->constrained('equipe_vedettes')->cascadeOnDelete();
            $table->foreignId('remorque_id')->constrained('remorques')->cascadeOnDelete();
            $table->foreignId('equipe_remorque_id')->constrained('equipe_remorques')->cascadeOnDelete();
            $table->foreignId('quai_id')->constrained('quais')->cascadeOnDelete();
            $table->foreignId('prestation_id')->constrained('prestations')->cascadeOnDelete();

            $table->timestamps();

        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('escales');
    }
};
