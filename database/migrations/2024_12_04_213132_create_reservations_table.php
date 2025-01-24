<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->date('dateVoyage');
            $table->string('nombreTicket');
            $table->string('villeDepart');
            $table->string('villeArrive');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('destination_id')->constrained();
            $table->integer('nombre_de_personne');
            $table->decimal('total_prix', 10, 2);
            $table->enum('status', ['en_attente', 'confimer', 'anulle']); // Statut de la réservation
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reservations', function(Blueprint $table){
            $table->dropForeign(["user_id","destination_id"]);
        });
        Schema::dropIfExists('reservations');
    }
}
