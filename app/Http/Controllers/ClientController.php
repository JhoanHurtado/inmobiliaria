<?php

namespace App\Http\Controllers;

use App\Inmueble;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $inmuebles    = Inmueble::orderBy('id', 'asc')->limit(4)->get();
        return view('client.index', compact('inmuebles'));
    }

    public function portafolio()
    {
        $inmuebles    = Inmueble::orderBy('id', 'asc')->get();
        return view('client.portafolio', compact('inmuebles'));
    }

    public function find(Request $request)
    {
        if ($request->input('habitaciones') != null || $request->input('habitaciones') != "") {
            $inmuebles    = Inmueble::where('habitaciones', $request->input('habitaciones'))->orderBy('id', 'asc')->get();
            return view('client.portafolio', compact('inmuebles'));
        } else {
            $inmuebles   = Inmueble::orderBy('id', 'asc')->get();
            return view('client.portafolio', compact('inmuebles'));
        }
    }
}
