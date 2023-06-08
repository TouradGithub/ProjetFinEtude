<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLangFemmesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lang_femmes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_femme')->nullable();
            $table->unsignedBigInteger('id_lang')->nullable();
            $table->timestamps();

            $table->foreign('id_femme')->references('id')->on('femmes');
            $table->foreign('id_lang')->references('id')->on('languages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lang_femmes');
    }
}
