<?php

namespace App\Http\Controllers;

use App\Inmueble;
use Illuminate\Http\Request;
// use Illuminate\Mail\Mailer;
// use Mail;
use Illuminate\Support\Facades\Mail;

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
        if ($request->input('nombre') != null || $request->input('nombre') != "") {
            $inmuebles    = Inmueble::where('nombre','LiKE', $request->input('nombre').'%')->orderBy('id', 'asc')->get();
            return view('client.portafolio', compact('inmuebles'));
        } else {
            $inmuebles   = Inmueble::orderBy('id', 'asc')->get();
            return view('client.portafolio', compact('inmuebles'));
        }
    }

    public function contact(Request $request){
        // dd($request->all());
        $subject = "SOLICITUD DE CONTACTO";
        $for = "jhoanehr@gmail.com";
        Mail::send('mails.emergency_call',$request->all(), function($msj) use($subject,$for){
            $msj->from("Jhoanehr@gmail.com","Inmoviliaria TVS");
            $msj->subject($subject);
            $msj->to($for);
        });
        return redirect()->back();
    }
}
