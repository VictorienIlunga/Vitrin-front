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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('nom',50);
            $table->string('prenom',50);
            $table->string('sexe',1);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->integer('Matricule');
            $table->string('telephone',11)->default(null);
            $table->string('adresse');
            $table->string('type',20);
           $table->string('statut');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
