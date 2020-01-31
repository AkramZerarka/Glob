<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom', 100)->nullable()->default('text');
            $table->string('prenom', 100)->nullable()->default('text');
            $table->string('profession', 100)->nullable()->default('text');
            $table->date('daten')->nullable();
            $table->string('lieun', 100)->nullable()->default('text');
            $table->integer('telephone')->nullable();
            $table->integer('mobile');
            $table->string('email');
            $table->string('adresse', 100)->nullable()->default('text');
            $table->string('ville', 100)->nullable()->default('text');
            $table->string('wilaya', 100)->nullable()->default('text');
            $table->string('photo')->nullable();
            $table->string('groupage', 100)->nullable()->default('text');
            $table->tinyInteger('existance')->default(1);
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
        Schema::dropIfExists('donates');
    }
}
