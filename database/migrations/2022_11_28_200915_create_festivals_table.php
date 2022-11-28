<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('festivals', function (Blueprint $table) {
            $table->id();
            $table->string('naam');
            $table->string('adres');
            $table->bigInteger('max_mensen');
            $table->bigInteger('verkocht');
            $table->string('style');
            $table->double('kosten',10,2);
            $table->dateTime('begin_datum');
            $table->dateTime('eind_datum');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('festivals');
    }
};
