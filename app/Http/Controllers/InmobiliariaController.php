<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Inmobiliaria;
use App\Inmueble;
use Exception;
use Illuminate\Http\Request;

class InmobiliariaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $inmobiliaria          = Inmobiliaria::orderBy('id', 'desc')->get();
        $clientes              = Cliente::orderBy('id', 'desc')->get();
        $cantidad_clientes     = count(Cliente::all());
        $cantidad_inmobiliaria = count(Inmobiliaria::all());
        $cantidad_inmuebles    = count(Inmueble::all());

        return view('dash.inmobiliaria.index', compact('inmobiliaria', 'clientes', 'cantidad_clientes', 'cantidad_inmobiliaria', 'cantidad_inmuebles'));
    }

    public function store(Request $request)
    {
        $validate = $this->validate($request, [
            'cliente'   => ['required'],
            'nit'       => ['required', 'unique:inmobiliarias,nit'],
            'nombre'    => ['required', 'string'],
            'direccion' => ['required'],
            'correo'    => ['required', 'email', 'unique:inmobiliarias,correo'],
            'termino'   => ['required'],
            'telefono'  => ['required'],
        ]);

        try {

            $inmobiliaria = new Inmobiliaria();

            $inmobiliaria->cliente_id     = $request->input('cliente');
            $inmobiliaria->nit            = $request->input('nit');
            $inmobiliaria->nombre_empresa = $request->input('nombre');
            $inmobiliaria->direccion      = $request->input('direccion');
            $inmobiliaria->telefono       = $request->input('telefono');
            $inmobiliaria->correo         = $request->input('correo');
            $inmobiliaria->codigo_postal  = $request->input('codigo_postal');
            $inmobiliaria->imagen         = null;
            $inmobiliaria->save();

            return redirect('/inmobiliaria')->with(['message' => 'Registro de inmobiliaria exitosa']);
        } catch (Exception $ex) {
            dd($ex);
            return back()->with(['error' => 'Oh! ha surgido un error']);
        }
    }


    public function edit($id)
    {
        $inmobiliarias          = Inmobiliaria::orderBy('id', 'desc')->get();
        $clientes              = Cliente::orderBy('id', 'desc')->get();
        $cantidad_clientes     = count(Cliente::all());
        $cantidad_inmobiliaria = count(Inmobiliaria::all());
        $cantidad_inmuebles    = count(Inmueble::all());
        $inmobiliaria          = Inmobiliaria::find($id);

        return view('dash.inmobiliaria.edit', compact('inmobiliaria', 'inmobiliarias', 'clientes', 'cantidad_clientes', 'cantidad_inmobiliaria', 'cantidad_inmuebles'));
    }

    public function update(Request $request, $id)
    {
        $validate = $this->validate($request, [
            'cliente'   => ['required'],
            'nombre'    => ['required', 'string'],
            'direccion' => ['required'],
            'termino'   => ['required'],
            'telefono'  => ['required'],
        ]);

        try {

            $inmobiliaria = Inmobiliaria::find($id);

            $inmobiliaria->cliente_id     = $request->input('cliente');
            $inmobiliaria->nombre_empresa = $request->input('nombre');
            $inmobiliaria->direccion      = $request->input('direccion');
            $inmobiliaria->telefono       = $request->input('telefono');
            $inmobiliaria->codigo_postal  = $request->input('codigo_postal');
            $inmobiliaria->imagen         = null;
            $inmobiliaria->save();

            return redirect('/inmobiliaria')->with(['message' => 'Actualizacion de inmobiliaria exitosa']);

        } catch (Exception $ex) {
            return back()->with([
                'message' => "Oh! Ha ocurrido un error!",
            ]);
        }
    }

}
