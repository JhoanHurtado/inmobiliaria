<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInmueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'inmuebles', function ( Blueprint $table ) {
            $table->id();
            $table->foreignId( 'inmobiliaria_id' )->constrained( 'inmobiliarias' );
            $table->string( 'imagen' )->nullable();
            $table->string( 'image2' )->nullable();
            $table->string( 'image3' )->nullable();
            $table->string( 'nombre' )->nullable();
            $table->integer( 'precio' )->nullable();
            $table->string( 'ciudad' )->nullable();
            $table->text( 'descripcion' )->nullable();
            $table->integer( 'banos' )->nullable();
            $table->integer( 'habitaciones' )->nullable();
            $table->integer( 'area' )->nullable();
            $table->string( 'direccion' )->nullable();
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists( 'inmuebles' );
    }
}
