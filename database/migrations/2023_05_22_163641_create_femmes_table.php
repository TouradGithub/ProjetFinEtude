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
            $table->string('nom');
            $table->integer('age');
            $table->integer('salaire');
            $table->string('etat');
            $table->string('image');
            $table->string('addrsse');

            $table->integer('disponible');
            $table->string('lang');
            $table->string('enfant');
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
