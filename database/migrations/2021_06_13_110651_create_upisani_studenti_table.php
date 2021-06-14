<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpisaniStudentiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upisani_studenti', function (Blueprint $table) {
            $table->id();
            $table->foreignId("ekolegij_id")->constrained("ekolegij");
            $table->foreignId("studenti_id")->constrained("studenti");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('upisani_studenti');
    }
}
