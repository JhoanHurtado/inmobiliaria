<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Inmobiliaria;
use App\Inmueble;
use Exception;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class InmuebleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $inmobiliarias          = Inmobiliaria::orderBy('id', 'desc')->get();
        $inmuebles              = Inmueble::orderBy('id', 'desc')->get();
        $cantidad_clientes     = count(Cliente::all());
        $cantidad_inmobiliaria = count(Inmobiliaria::all());
        $cantidad_inmuebles    = count(Inmueble::all());

        return view('dash.inmueble.index', compact('inmobiliarias', 'cantidad_clientes', 'cantidad_inmobiliaria', 'cantidad_inmuebles', 'inmuebles'));
    }

    public function store(Request $request)
    {
        $validate = $this->validate($request, [
            'nombre'            =>  ['required', 'string'],
            'precio'            =>  ['required'],
            'direction'         =>  ['required'],
            'inmobiliaria'      =>  ['required'],
            'ciudad'            =>  ['required'],
            'descripcion'       =>  ['required'],
            'banos'             =>  ['required'],
            'habitaciones'      =>  ['required'],
            'area'              =>  ['required'],
            'image'             =>  ['required'],
            'image2'            =>  ['required'],
            'image3'            =>  ['required'],
            // 'termino'           =>  ['required'],
        ]);

        try {

            $inmueble = new Inmueble();

            $imagen = $request->file('image');
            $imagen2 = $request->file('image2');
            $imagen3 = $request->file('image3');

            $nombre = $imagen->getClientOriginalName();
            $nombre2 = $imagen2->getClientOriginalName();
            $nombre3 = $imagen3->getClientOriginalName();

            Storage::disk('local')->put($nombre,  File::get($imagen));
            Storage::disk('local')->put($nombre2,  File::get($imagen2));
            Storage::disk('local')->put($nombre3,  File::get($imagen3));

            $inmueble->inmobiliaria_id      = $request->input('inmobiliaria');
            $inmueble->nombre               = $request->input('nombre');
            $inmueble->precio               = $request->input('precio');
            $inmueble->ciudad               = $request->input('ciudad');
            $inmueble->direccion            = $request->input('direction');
            $inmueble->descripcion          = $request->input('descripcion');
            $inmueble->banos                = $request->input('banos');
            $inmueble->habitaciones         = $request->input('habitaciones');
            $inmueble->area                 = $request->input('area');
            $inmueble->imagen               = $nombre;
            $inmueble->image2            = $nombre2;
            $inmueble->image3            = $nombre3;

            $inmueble->save();

            return redirect('/inmuebles')->with(['message' => 'Registro de inmueble exitoso']);
        } catch (Exception $ex) {
            dd($ex);
            return back()->with(['error' => 'Oh! ha surgido un error']);
        }
    }

    public function edit($id)
    {
        $inmobiliarias          = Inmobiliaria::orderBy('id', 'desc')->get();
        $inmuebles              = Inmueble::orderBy('id', 'desc')->get();
        $cantidad_clientes     = count(Cliente::all());
        $cantidad_inmobiliaria = count(Inmobiliaria::all());
        $cantidad_inmuebles    = count(Inmueble::all());
        $inmueble = Inmueble::find($id);
        return view('dash.inmueble.edit', compact('inmueble', 'inmobiliarias', 'cantidad_clientes', 'cantidad_inmobiliaria', 'cantidad_inmuebles', 'inmuebles'));
    }

    public function update(Request $request, $id)
    {
        $validate = $this->validate($request, [
            'nombre'            =>  ['required', 'string'],
            'precio'            =>  ['required'],
            'direction'         =>  ['required'],
            'inmobiliaria'      =>  ['required'],
            'ciudad'            =>  ['required'],
            'descripcion'       =>  ['required'],
            'banos'             =>  ['required'],
            'habitaciones'      =>  ['required'],
            'area'              =>  ['required'],
            // 'termino'           =>  ['required'],
        ]);

        try {

            $inmobiliaria_id      = $request->input('inmobiliaria');
            $nombre               = $request->input('nombre');
            $precio               = $request->input('precio');
            $direccion            = $request->input('direction');
            $habitaciones         = $request->input('habitaciones');
            $descripcion          = $request->input('descripcion');
            $banos                = $request->input('banos');
            $area                 = $request->input('area');

            $inmueble = inmueble::find($id);

            $inmueble->nombre           = $nombre;
            $inmueble->precio           = $precio;
            $inmueble->direccion        = $direccion;
            $inmueble->inmobiliaria_id  = $inmobiliaria_id;
            $inmueble->habitaciones     = $habitaciones;
            $inmueble->descripcion      = $descripcion;
            $inmueble->banos            = $banos;
            $inmueble->area             = $area;

            if ($request->file('image') != null) {
                $imagen = $request->file('image');
                $nombre = $imagen->getClientOriginalName();
                $inmueble->imagen = $nombre;
                Storage::disk('local')->put($nombre,  File::get($imagen));
            }
            if ($request->file('image2') != null) {
                $image2 = $request->file('image2');
                $nombre2 = $image2->getClientOriginalName();
                $inmueble->image2 = $nombre2;
                Storage::disk('local')->put($nombre2,  File::get($image2));
            }
            if ($request->file('image3') != null) {
                $image3 = $request->file('image3');
                $nombre3 = $imagen->getClientOriginalName();
                $inmueble->image3 = $nombre3;
                Storage::disk('local')->put($nombre3,  File::get($image3));
            }
            $inmueble->save();
            return redirect('/inmuebles')->with(['message' => 'Actualizacion de inmueble exitosa']);
        } catch (Exception $ex) {

            return back()->with([
                'message' => "Oh! Ha ocurrido un error!",
            ]);
        }
    }
}
