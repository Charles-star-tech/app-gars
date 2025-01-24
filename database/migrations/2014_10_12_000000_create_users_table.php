<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->char('sexe');
            $table->string('dateNaissance');
            $table->string('lieuNaissance');
            $table->string('nationalite');
            $table->string('ville');
            $table->string('pays');
            $table->string('telephone 1');
            $table->string('telephone 2')->nullable();
            $table->string('pieceIdentite');
            $table->string('numeroPieceIdentite');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('photo')->nullable();
            $table->enum("role",["admin","client"]);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
