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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->text('tipoDoc');
            $table->integer('numDoc');
            $table->string('docIdent');
            $table->date('fechaExp');
            $table->unsignedBigInteger('idMuniExp');
            $table->text('nombres');
            $table->text('primerApellido');
            $table->text('segundoApellido');
            $table->text('genero');
            $table->unsignedBigInteger('idMuni');
            $table->unsignedBigInteger('idCurso');
            $table->integer('estrato');
            $table->timestamps();

            $table->foreign('idMuniExp')->references('id')->on('municipios')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreign('idMuni')->references('id')->on('municipios')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreign('idCurso')->references('id')->on('cursos')->onDelete('cascade')->onUpdate('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
};
