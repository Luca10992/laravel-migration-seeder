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
            $table->char('cod_train', 4);
            $table->string('agency');
            $table->tinyInteger('number_carrieges');
            $table->string('departe_station');
            $table->dateTime('departe_date');
            $table->string('arrive_station');
            $table->dateTime('arrive_date');
            $table->tinyInteger('delay');
            $table->boolean('canceled');
            $table->enum('type', ['frecciarossa','frecciargento','regionale','intercity']);
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