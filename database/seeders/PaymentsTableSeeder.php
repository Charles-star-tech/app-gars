<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('payments')->insert([
            [
                'reservation_id' => 1, // Vous pouvez ajuster ces valeurs en fonction des réservations existantes
                'montant_paiye' => 100.50,
                'payment_method' => 'carte_credit',
                'payment_status' => 'complet',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'reservation_id' => 2,
                'montant_paiye' => 200.00,
                'payment_method' => 'bank_transfer',
                'payment_status' => 'en_attente',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
