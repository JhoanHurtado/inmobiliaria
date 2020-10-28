<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'clientes', function ( Blueprint $table ) {
            $table->id();
            $table->foreignId( 'users_id' )->constrained( 'users' );
            $table->string( 'telefono' )->nullable();
            $table->string( 'ciudad' )->nullable();
            $table->date( 'fecha_nacimiento' );
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
        Schema::dropIfExists( 'clientes' );
    }
}
