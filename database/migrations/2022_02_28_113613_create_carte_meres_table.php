<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarteMeresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carte_meres', function (Blueprint $table) {
            $table->id();
            $table->string('text');
            $table->string('socket');
            $table->string('taille');
            $table->integer('prix');
            $table->string('img');
            $table->string('site');
            $table->string('ram');
            $table->string('cg');
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
        Schema::dropIfExists('carte_meres');
    }
}
