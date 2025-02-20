<?php

namespace Database\Factories;

use App\Models\Destination;
use Illuminate\Database\Eloquent\Factories\Factory;

class DestinationFactory extends Factory
{
    /**
     * Définir l'état par défaut du modèle.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->city,                 // Génère un nom de ville aléatoire
            'description' => $this->faker->text(200),     // Génère une description aléatoire (200 caractères)
            'ville_depart' => $this->faker->city,         // Ville de départ
            'ville_arrive' => $this->faker->city,         // Ville d'arrivée
        ];
    }
}
