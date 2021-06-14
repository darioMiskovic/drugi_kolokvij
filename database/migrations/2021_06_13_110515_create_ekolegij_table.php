<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEkolegijTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ekolegij', function (Blueprint $table) {
            $table->id();
            $table->string("naziv",45);
            $table->string("link",100);
            $table->text("opis");
            $table->tinyInteger("aktivan");
            $table->date("dostupan_do");
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
        Schema::dropIfExists('ekolegij');
    }
}
