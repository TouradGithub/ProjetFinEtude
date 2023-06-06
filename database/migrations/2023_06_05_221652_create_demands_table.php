<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandsTable extends Migration
{


    public function up()
    {
        Schema::create('demands', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_femme')->nullable();
            $table->unsignedBigInteger('id_user')->nullable();
            $table->integer("active")->default('0');
            $table->timestamps();

            $table->foreign('id_femme')->references('id')->on('femmes');
            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demands');
    }
}
