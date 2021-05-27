<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string("nombre",25);
            $table->string("apellido",25);
            $table->string("eps",25);
            $table->string("direccion",30);
            $table->string("nombreacom",25);
            $table->bigInteger("telefonoacom");
            $table->string("antecedentes",250);
            $table->string("motivo",250);
            $table->string("diagnostico",250);
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
        Schema::dropIfExists('pacientes');
    }
}
