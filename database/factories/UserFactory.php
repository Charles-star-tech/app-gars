<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    /**
     * Définir l'état par défaut du modèle.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->lastName(),
            'prenom' => $this->faker->firstName(),
            'sexe' => $this->faker->randomElement(['M', 'F']), // Sexe (M ou F)
            'dateNaissance' => $this->faker->date(), // Date de naissance
            'lieuNaissance' => $this->faker->city(), // Lieu de naissance
            'nationalite' => $this->faker->country(), // Nationalité
            'ville' => $this->faker->city(), // Ville
            'pays' => $this->faker->country(), // Pays
            'telephone_1' => $this->faker->phoneNumber(), // Téléphone 1
            'telephone_2' => $this->faker->optional()->phoneNumber(), // Téléphone 2 (facultatif)
            'pieceIdentite' => $this->faker->word(), // Type de pièce d'identité
            'numeroPieceIdentite' => $this->faker->unique()->word(), // Numéro de pièce d'identité
            'email' => $this->faker->unique()->safeEmail(), // Email unique
            'password' => Hash::make('password'), // Mot de passe sécurisé
            'photo' => $this->faker->imageUrl(), // URL de photo (si tu veux une vraie photo, tu pourrais utiliser un package comme FakerImage)
            'role' => $this->faker->randomElement(['admin', 'client']), // Rôle de l'utilisateur
            'remember_token' => Str::random(10), // Token de rappel pour l'authentification
        ];
    }

    /**
     * Indiquer que l'adresse email du modèle ne devrait pas être vérifiée.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
