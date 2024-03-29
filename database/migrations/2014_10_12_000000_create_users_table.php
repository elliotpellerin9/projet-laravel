<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string("prenom");
            $table->string("nom");
            $table->string("statut");
            $table->string("tel")->nullable();
            $table->string("adresse")->nullable();
            $table->string("ville")->nullable();
            $table->string("province")->nullable();
            $table->string("codepostal")->nullable();
            $table->text("description")->nullable();
            $table->string("imageUrl")->nullable();
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
