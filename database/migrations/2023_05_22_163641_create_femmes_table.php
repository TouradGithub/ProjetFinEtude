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
            $table->string('nom')->nullable();
            $table->integer('age')->nullable();
            $table->integer('salaire')->nullable();
            $table->string('etat')->nullable();
            $table->string('image')->nullable();
            $table->string('addrsse')->nullable();
            $table->integer('disponible')->nullable();
            $table->string('enfant')->nullable();
            $table->string('descrption')->nullable();
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
