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
        Schema::create('avis', function (Blueprint $table) {
            $table->id();

             //1er clé étrangère
             $table->unsignedBigInteger('client_id');
             $table->foreign('client_id')->references('id')->on('clients');


             //2e clé étrangère
             $table->unsignedBigInteger('voyage_id');
             $table->foreign('voyage_id')->references('id')->on('voyages');

            $table->text('contenu');
            $table->integer('note');
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avis');
    }
};
