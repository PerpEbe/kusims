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
        Schema::create('deferements', function (Blueprint $table) {
            $table->id();
            $table->string('year');
            $table->string('semister');
            $table->string('notes');
            $table->string('reasons');
            $table->string('hod_approval');
            $table->string('registrar_approval');
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
        Schema::dropIfExists('deferements');
    }
};
