<?php

namespace Database\Seeders;

use App\Models\Payment;
use App\Models\Reservation;
use App\Models\User;
use App\Models\Destination;
use App\Models\Courier;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Créer 10 utilisateurs
        User::factory(10)->create();

        // Créer 10 destinations
        Destination::factory(10)->create();

        // Créer 10 courriers (en supposant que des utilisateurs et des destinations existent déjà)
        Courier::factory(10)->create();

        // Créer 10 réservations
        Reservation::factory(10)->create();

        // Créer 10 paiements de test
        Payment::factory(10)->create();

    }
}
