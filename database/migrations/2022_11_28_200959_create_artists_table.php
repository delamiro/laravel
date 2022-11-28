<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->id();
            $table->string('naam');
            $table->string('adres');
            $table->string('specialiteit');
            $table->string('echte_naam');
            $table->double('richtprijs',10,2);
            $table->string('manager');
            $table->string('managerNr');
            $table->string('mail');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('artists');
    }
};
