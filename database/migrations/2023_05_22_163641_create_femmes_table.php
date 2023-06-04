<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFemmesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('femmes', function (Blueprint $table) {
            $table->id();
            $table->string('Nom');
            $table->integer('Age');
            $table->integer('Salaire');
            $table->string('Etat');
            $table->string('Lieu-de-travail');
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
        Schema::dropIfExists('femmes');
    }
}
