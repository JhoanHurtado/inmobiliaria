<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInmobiliariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'inmobiliarias', function ( Blueprint $table ) {
            $table->id();
            $table->foreignId( 'cliente_id' )->constrained( 'clientes' );
            $table->string( 'nit' );
            $table->string( 'nombre_empresa' );
            $table->string( 'direccion' );
            $table->string( 'telefono' );
            $table->string( 'correo' );
            $table->string( 'codigo_postal' )->nullable();
            $table->string( 'imagen' )->nullable();
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
        Schema::dropIfExists( 'inmobiliarias' );
    }
}
