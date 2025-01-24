<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reservation_id')->constrained();
            $table->decimal('montant_paiye', 10, 2);
            $table->enum('payment_method', ['carte_credit', 'en_ espese', 'bank_transfer']);
            $table->enum('payment_status', ['en_attente', 'complet', 'manque']);
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
        Schema::table('payments', function(Blueprint $table){
            $table->dropForeign('reservation_id'); // Supprimer la contrainte de clé étrangère
        });
        Schema::dropIfExists('payments');
    }    
}
