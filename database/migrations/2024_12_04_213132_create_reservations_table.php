<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Exécuter les migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->date('dateVoyage');  // Date du voyage
            $table->integer('nombreTicket'); // Nombre de tickets (utilisé en tant qu'entier)
            $table->string('villeDepart'); // Ville de départ
            $table->string('villeArrive'); // Ville d'arrivée
            $table->foreignId('user_id')->constrained()->onDelete('cascade');  // Clé étrangère vers la table users, suppression en cascade
            $table->foreignId('destination_id')->constrained()->onDelete('cascade');  // Clé étrangère vers la table destinations, suppression en cascade
            $table->integer('nombre_de_personne'); // Nombre de personnes
            $table->decimal('total_prix', 10, 2); // Montant total de la réservation
            $table->enum('status', ['en_attente', 'confirmer', 'annule']);  // Statut de la réservation
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();  // Activer les contraintes de clé étrangère
    }

    /**
     * Inverser les migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reservations', function (Blueprint $table) {
            // Spécifier les noms des contraintes pour éviter les erreurs lors de la suppression
            $table->dropForeign('reservations_user_id_foreign');  // Supprimer la contrainte sur user_id
            $table->dropForeign('reservations_destination_id_foreign');  // Supprimer la contrainte sur destination_id
        });
        Schema::dropIfExists('reservations');  // Supprimer la table reservations
    }
}
