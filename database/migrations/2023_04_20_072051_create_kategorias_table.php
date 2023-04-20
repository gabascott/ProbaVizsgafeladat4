<?php

use App\Models\Kategoria;
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
        Schema::create('kategorias', function (Blueprint $table) {
            $table->id();
            $table->string('nev');
            $table->timestamps();
        });

        Kategoria::create(['nev'=>'főétel']);
        Kategoria::create(['nev'=>'leves']);
        Kategoria::create(['nev'=>'édesség']);
        Kategoria::create(['nev'=>'saláta']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategorias');
    }
};
