@extends('layouts.app')

@section('content')
@section('title', "INMOBILIARIA")

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
    <h1>Registro Inmobiliaria</h1> <br>
    <form method="POST" action="{{ url('/inmobiliaria/save') }}">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Nombre Inmobiliaria</label>
                <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="inputEmail4"
                    placeholder="Inmobiliaria" name="nombre" value="{{ old('nombre') }}">

                @error('nombre')
                <span class="text-danger"> {{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="numcontacto">Nit</label>
                <input type="text" class="form-control @error('nit') is-invalid @enderror" id="inputPassword4"
                    placeholder="" name="nit" maxlength="15" value="{{ old('nit') }}">
                @error('nit')
                <span class="text-danger"> {{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-row">

            <div class="form-group col-md-6">
                <label for="inputAddress">Direccion completa</label>
                <input type="text" class="form-control @error('direccion') is-invalid @enderror" id="inputAddress"
                    placeholder="Direccion..." name="direccion" value="{{ old('direccion') }}">

                @error('direccion')
                <span class="text-danger"> {{ $message }}</span>
                @enderror
            </div>

            <div class="form-group col-md-6">
                <label for="inputAddress">Cliente</label>
                <select name="cliente" class="form-control @error('cliente') is-invalid @enderror" id="inputAddress">
                    <option value="" disabled> Elija el cliente</option>
                    @foreach ($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->usuario->nombre }}</option>
                    @endforeach
                </select>
                @error('cliente')
                <span class="text-danger"> {{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputAddress">Correo</label>
                <input type="email" class="form-control @error('correo') is-invalid @enderror" id="inputAddress"
                    placeholder="example@example.com" name="correo" value="{{ old('correo') }}">

                @error('correo')
                <span class="text-danger"> {{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="inputState">Ciudad</label>
                <input type="text" name="ciudad" id="ciudad" class="form-control @error('ciudad') is-invalid @enderror"
                    value="{{ old('ciudad') }}">
                @error('ciudad')
                <span class="text-danger"> {{ $message }}</span>
                @enderror
            </div>

        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputZip">Telefono</label>
                <input type="number" class="form-control @error('telefono') is-invalid @enderror" id="inputZip"
                    name="telefono" value="{{ old('telefono') }}">
                @error('telefono')
                <span class=" text-danger"> {{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="inputZip">Codigo Postal</label>
                <input type="text" class="form-control @error('codigo_postal') is-invalid @enderror" id="inputZip"
                    name="codigo_postal" value="{{ old('codigo_postal') }}">
                @error('codigo_postal')
                <span class=" text-danger"> {{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck" name="termino">
                <label class="form-check-label" for="gridCheck">
                    Aceptar terminos y condiciones
                </label>
                @error('termino')
                <span class="text-danger"> {{ $message }}</span>
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Inmobiliarias
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nit</th>
                        <th>Empresa</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($inmobiliaria as $item)
                    <tr>
                        <td><a href="{{ url('/inmobiliaria/'.$item->id) }}">{{ $item->nit }}</a></td>
                        <td><a href="{{ url('/inmobiliaria/'.$item->id) }}">{{ $item->nombre_empresa }}</a></td>
                        <td><a href="{{ url('/inmobiliaria/'.$item->id) }}">{{ $item->direccion }}</a></td>
                        <td><a href="{{ url('/inmobiliaria/'.$item->id) }}">{{ $item->telefono }}</a></td>
                        <td><a href="{{ url('/inmobiliaria/'.$item->id) }}">{{ $item->correo }}</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
