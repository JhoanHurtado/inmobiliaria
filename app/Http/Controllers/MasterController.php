<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Inmobiliaria;
use App\Inmueble;

class MasterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware( 'auth' );
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cantidad_clientes     = count( Cliente::all() );
        $cantidad_inmobiliaria = count( Inmobiliaria::all() );
        $cantidad_inmuebles    = count( Inmueble::all() );
        return view( 'index', compact( 'cantidad_clientes', 'cantidad_inmobiliaria', 'cantidad_inmuebles' ) );
    }
}
