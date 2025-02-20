<?php

namespace Database\Factories;

use App\Models\Reservation;
use App\Models\User;
use App\Models\Destination;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    /**
     * Définir l'état par défaut du modèle.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dateVoyage' => $this->faker->date(),  // Date du voyage
            'nombreTicket' => $this->faker->randomNumber(2),  // Nombre de tickets (ex: 1, 10, 25)
            'villeDepart' => $this->faker->city(),  // Ville de départ
            'villeArrive' => $this->faker->city(),  // Ville d'arrivée
            'user_id' => User::inRandomOrder()->first()->id,  // Sélectionner un utilisateur aléatoire
            'destination_id' => Destination::inRandomOrder()->first()->id,  // Sélectionner une destination aléatoire
            'nombre_de_personne' => $this->faker->randomDigitNotNull(),  // Nombre de personnes (ex: 1, 2, 5, 10)
            'total_prix' => $this->faker->randomFloat(2, 50, 500),  // Prix total (entre 50 et 500)
            'status' => $this->faker->randomElement(['en_attente', 'confirmer', 'annule']),  // Statut de la réservation
        ];
    }
}
