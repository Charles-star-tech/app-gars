<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouriersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('couriers', function (Blueprint $table) {
            $table->id();
            $table->string('natureClie');
            $table->foreignId('user_id')->constrained('users');  // Spécifie la table référencée
            $table->foreignId('destination_id')->constrained('destinations');  // Spécifie la table référencée
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
        Schema::table('couriers', function (Blueprint $table) {
            // Le nom de la contrainte générée automatiquement pourrait être différent.
            $table->dropForeign(['user_id']);
            $table->dropForeign(['destination_id']);
        });
        Schema::dropIfExists('couriers');
    }
}
