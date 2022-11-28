<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('boekings', function (Blueprint $table) {
            $table->id();
            $table->string('naam');
            $table->string('adres');
            $table->foreignId('artist_id')->references('id')->on('artists')->onDelete('cascade');
            $table->date('datum');
            $table->foreignId('festival_id')->references('id')->on('festivals')->onDelete('cascade');
            $table->double('prijs',10,2);
            $table->string('aantekening');
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();

        });
    }


    public function down()
    {
        Schema::dropIfExists('boekings');
    }
};
