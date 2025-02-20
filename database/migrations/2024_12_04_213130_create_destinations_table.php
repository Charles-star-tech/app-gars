<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinations', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->text('description');
            $table->string('ville_depart');
            $table->string('ville_arrive');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();  // Cette ligne est bien ici pour activer les clés étrangères
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Aucune contrainte 'payment_id' dans cette table, donc pas besoin de la supprimer
        Schema::dropIfExists('destinations');
    }
}
