<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 25);
            $table->string('st_Partenza', 25);
            $table->string('st_Arrivo', 25);
            $table->time('h_arrivo', $precision = 2);
            $table->time('h_partenza', $precision = 2);
            $table->string('code_train', 6);
            $table->integer('n_carrozze');
            $table->boolean('orario');
            $table->boolean('cancellato');

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
        Schema::dropIfExists('trains');
    }
};