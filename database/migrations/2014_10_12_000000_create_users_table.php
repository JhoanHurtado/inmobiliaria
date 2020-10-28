<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'users', function ( Blueprint $table ) {
            $table->id();
            $table->bigInteger( 'identificacion' )->unique();
            $table->string( 'nombre' );
            $table->string( 'email' )->nullable()->unique();
            $table->string( 'password' )->nullable();
            $table->string( 'tipo' )->default();
            $table->string( 'estado' );
            $table->rememberToken();
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
        Schema::dropIfExists( 'users' );
    }
}
