<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void              // Crea la tabellaphp art
    {
        Schema::create('trains', function (Blueprint $table) { 
            $table->id();                   // Unsigned bih integer auto increment primary key

            $table->string('company', 64);
            $table->string('departure_station', 64);
            $table->string('arrival_station', 64);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('code', 7)->unique();
            $table->unsignedTinyInteger('carriages_num')->nullable();
            $table->boolean('on_time')->default(true);
            $table->boolean('canceled')->default(false);

            $table->timestamps();           // Created_at e updated_at (etrambe timestamp nullable)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void            // Elimina la tabella
    {
        Schema::dropIfExists('trains');
    }
};
