<?php

namespace Database\Factories;

use App\Models\Payment;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    /**
     * Définir l'état par défaut du modèle.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'reservation_id' => Reservation::inRandomOrder()->first()->id,  // Sélectionne une réservation aléatoire
            'montant_paiye' => $this->faker->randomFloat(2, 10, 1000),  // Montant payé entre 10 et 1000
            'payment_method' => $this->faker->randomElement(['carte_credit', 'en_espese', 'bank_transfer']),  // Méthode de paiement
            'payment_status' => $this->faker->randomElement(['en_attente', 'complet', 'manque']),  // Statut de paiement
        ];
    }
}
