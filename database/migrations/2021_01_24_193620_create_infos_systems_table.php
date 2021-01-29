<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateInfosSystemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos_systems', function (Blueprint $table) {
            $table->id();
            $table->string('app_name', 125);
            $table->string('description', 1650);
            $table->string('mobile');
            $table->string('fixe');
            $table->string('address', 100);
            $table->string('email', 100);
            $table->timestamps();
        });
        DB::table('infos_systems')->insert(
            array(
                'app_name' => 'Samaykayit',
                'description' => 'Le guichet électronique SAMAYKAYIT est un télé-service mis en place par NDIGUEUL SENE SERVICES N2S, afin de simplifier aux citoyens la procédure d’obtention de certains documents administratifs (Etat civil et Tribunaux, et Lieux de légalisation).',
                'mobile' => '(+221) 77 679 5274',
                'fixe' => '(+221) 33 896 0206',
                'address' => 'Thiaroye Azure',
                'email' => 'contact@samaykayit.com',
            )
        );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infos_systems');
    }
}
