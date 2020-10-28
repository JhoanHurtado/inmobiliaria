@extends('layouts.app')

@section('content')
@section('title', "CLIENTES")

<div class="card-body">

    @if(session('message'))
    <div class="bg-success p-1 ">
        <h5 class="text-white"> {{ session('message') }}</h5>
    </div>
    @elseif(session('error'))
    <div class="bg-danger p-1 ">
        <h5 class="text-white"> {{ session('error') }}</h5>
    </div>
    @endif
    <h1>Registro Clientes</h1> <br>
    <form action="{{ route('cliente.update',$cliente->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Identificacion </label>
                <input type="number" class="form-control @error('identificacion') is-invalid @enderror"
                    id="inputIdenticacion" name="identificacion" placeholder="Identificacion"
                    value="{{ $cliente->usuario->identificacion }}" maxlength="15">

                @error('identificacion')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group col-md-6">
                <label for="inputEmail4">Nombre</label>
                <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="inputNombre"
                    name="nombre" placeholder="Nombre" value="{{ $cliente->usuario->nombre }}">
                @error('nombre')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail4"
                    name="email" placeholder="Email" value="{{ $cliente->usuario->email }}">
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="numcontacto">Telefono</label>
                <input type="number" class="form-control @error('telefono') is-invalid @enderror" id="inputPassword4"
                    name="telefono" placeholder="3224322211" value="{{ $cliente->telefono }}">
                @error('telefono')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group col-md-6">
                <label for="inputCity">Ciudad</label>
                <input type="text" class="form-control @error('ciudad') is-invalid @enderror" id="inputCity"
                    name="ciudad" value="{{ $cliente->ciudad}}">
                @error('ciudad')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group col-md-6">
                <label for="fechaNacimiento">Fecha de nacimiento</label>
                <input class="form-control @error('fecha_nacimiento') is-invalid @enderror" type="date"
                    id="fechaNacimiento" name="fecha_nacimiento" value="{{ $cliente->fecha_nacimiento}}">
                @error('fecha_nacimiento')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input @error('termino') is-invalid @enderror" type="checkbox" name="termino"
                    id="gridCheck" required />
                <label class="form-check-label" for="gridCheck">
                    Aceptar terminos y condiciones
                </label>

                @error('termino')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        clientes
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Identificacion</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Celular</th>
                        <th>Ciudad</th>
                        <th>Fecha Creacion</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($clientes as $cliente)
                    <tr>
                        <td><a href="{{ url('/cliente/'.$cliente->id) }}">{{ $cliente->usuario->identificacion }}</a></td>
                        <td><a href="{{ url('/cliente/'.$cliente->id) }}">{{ strtoupper($cliente->usuario->nombre) }}</a></td>
                        <td><a href="{{ url('/cliente/'.$cliente->id) }}">{{ $cliente->usuario->email }}</a></td>
                        <td><a href="{{ url('/cliente/'.$cliente->id) }}">{{ $cliente->telefono }}</a></td>
                        <td><a href="{{ url('/cliente/'.$cliente->id) }}">{{ $cliente->ciudad }}</a></td>
                        <td><a href="{{ url('/cliente/'.$cliente->id) }}">{{ date('Y-m-d', strtotime($cliente->created_at)) }}</a></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
