<?php

use App\Models\Recept;
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
        Schema::create('recepts', function (Blueprint $table) {
            $table->id();
            $table->string('nev');
            $table->foreignId('kat_id')->references('id')->on('kategorias');
            $table->string('kep_eleresi_ut')->nullable();
            $table->string('leiras');
            $table->timestamps();
        });
        Recept::create(['nev'=>'teszt', 'kat_id'=>'1', 'kep_eleresi_ut'=>'kepek/asd.jpg', 'leiras'=>'valami leírás']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recepts');
    }
};
