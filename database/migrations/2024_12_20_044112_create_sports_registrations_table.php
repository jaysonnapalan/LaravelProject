<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('sports_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone', 15); // Adding phone column
            $table->string('department'); // Adding department column
            $table->string('year_level'); // Adding year_level column
            $table->string('sport');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sports_registrations');
    }
};
