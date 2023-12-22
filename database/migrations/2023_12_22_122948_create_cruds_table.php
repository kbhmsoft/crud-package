<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrudsTable extends Migration
{
    public function up()
    {
        Schema::create('cruds', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // Add more fields as needed
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cruds');
    }
}
