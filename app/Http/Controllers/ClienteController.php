<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Inmobiliaria;
use App\Inmueble;
use App\User;
use Exception;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware( 'auth' );
    }

    public function index()
    {

        $clientes              = Cliente::orderBy( 'id', 'desc' )->get();
        $cantidad_clientes     = count( Cliente::all() );
        $cantidad_inmobiliaria = count( Inmobiliaria::all() );
        $cantidad_inmuebles    = count( Inmueble::all() );

        return view( 'dash.clientes.index', compact( 'clientes', 'cantidad_clientes', 'cantidad_inmobiliaria', 'cantidad_inmuebles' ) );
    }

    public function store( Request $request )
    {
        $validate = $this->validate( $request, [
            'identificacion' => ['required', 'numeric', 'unique:users,identificacion'],
            'nombre'         => ['required', 'string'],
            'email'          => ['required', 'email', 'unique:users,email'],
            'telefono'       => ['required', 'numeric'],
            'termino'        => ['required'],
        ] );

        try {
            $usuario = new User();

            $usuario->identificacion = $request->input( 'identificacion' );
            $usuario->nombre         = $request->input( 'nombre' );
            $usuario->email          = $request->input( 'email' );
            $usuario->tipo           = 'CLIENTE';
            $usuario->estado         = 'ACTIVO';

            $usuario->save();

            $cliente = new Cliente();

            $cliente->users_id         = $usuario->id;
            $cliente->telefono         = $request->input( 'telefono' );
            $cliente->ciudad           = $request->input( 'ciudad' );
            $cliente->fecha_nacimiento = $request->input( 'fecha_nacimiento' );

            $cliente->save();

            return redirect( '/clientes' )->with( ['message' => 'Registro de cliente realizado con exito'] );
        } catch ( Exception $ex ) {
            return back()->with( ['error' => 'Oh! Ah ocurrido un error'] );
        }
    }

    public function edit($id)
    {

        $clientes              = Cliente::orderBy( 'id', 'desc' )->get();
        $cantidad_clientes     = count( Cliente::all() );
        $cantidad_inmobiliaria = count( Inmobiliaria::all() );
        $cantidad_inmuebles    = count( Inmueble::all() );
        $cliente    = Cliente::find($id);

        return view( 'dash.clientes.edit', compact( 'cliente','clientes', 'cantidad_clientes', 'cantidad_inmobiliaria', 'cantidad_inmuebles' ) );
    }

    public function update(Request $request, $id)
    {
        $validate = $this->validate( $request, [
            'identificacion' => ['required', 'numeric'],
            'nombre'         => ['required', 'string'],
            'telefono'       => ['required', 'numeric'],
            'termino'        => ['required'],
        ] );

        try {
            $usuario = User::find($id);
            $usuario->nombre         = $request->input( 'nombre' );

           $usuario->save();

            $cliente = Cliente::find($usuario->id);

            $cliente->telefono         = $request->input( 'telefono' );
            $cliente->ciudad           = $request->input( 'ciudad' );
            $cliente->fecha_nacimiento = $request->input( 'fecha_nacimiento' );

            $cliente->save();

            return redirect('/clientes')->with(['message' => 'Actualizacion de cliente exitosa']);

        } catch (Exception $ex) {
            return back()->with([
                'message' => "Oh! Ha ocurrido un error!",
            ]);
        }
    }

}
