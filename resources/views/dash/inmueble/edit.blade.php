@extends('layouts.app')

@section('content')
@section('title', "INMUEBLE")

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
    <h1>Registro Inmueble</h1> <br>
    <form method="POST" action="{{ route('inmueble.update',$inmueble->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nombre">Nombre del Inmueble</label>
                <input type="text" class="form-control" id="nombre" value="{{$inmueble->nombre}}" name="nombre">
                @error('nombre')
                <span class="text-danger"> {{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="descripcion">Descripcion</label>
                <input type="text" class="form-control" id="descripcion" value="{{$inmueble->descripcion}}" name="descripcion" placeholder="Descripcion">
                @error('nombre')
                <span class="text-danger"> {{ $descripcion }}</span>
                @enderror
            </div>

        </div>
        <div class="form-group">
            <label for="habitaciones">Habitacion</label>
            <input type="number" class="form-control"value="{{$inmueble->habitaciones}}"  id="habitaciones" name="habitaciones" placeholder="88,00 m²">
            @error('nombre')
            <span class="text-danger"> {{ $habitaciones }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="banos">Baños</label>
            <input type="number" class="form-control" value="{{$inmueble->banos}}" id="banos" name="banos" placeholder="88,00 m²">
            @error('nombre')
            <span class="text-danger"> {{ $banos }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="area">Area</label>
            <input type="text" class="form-control" value="{{$inmueble->area}}" id="area" name="area" placeholder="88,00 m²">
            @error('nombre')
            <span class="text-danger"> {{ $area }}</span>
            @enderror
        </div>
        <div class="form-group">
                <label for="Precio">Precio</label>
                <input type="text" class="form-control" id="Precio" value="{{$inmueble->precio}}" name="precio">
                @error('precio')
                <span class="text-danger"> {{ $message }}</span>
                @enderror
            </div>

        <div class="form-group">
            <label for="inputAddress">Direccion completa</label>
            <input type="text" class="form-control" id="inputAddress" value="{{$inmueble->direccion}}" name="direction">
            @error('direction')
            <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="inmobiliaria">Empresa inmobiliaria</label>
            <select id="inmobiliaria" class="form-control" name="inmobiliaria">
                <!-- <option selected>{{$inmueble->inmobiliaria->nombre_empresa}} </option> -->
                @foreach ($inmobiliarias as $inmobiliaria)
                @if ( $inmobiliaria->id == $inmueble->inmobiliaria->id )
                <option value="{{ $inmobiliaria->id }}" selected>{{ $inmobiliaria->nombre_empresa }}</option>
                @else
                <option value="{{ $inmobiliaria->id }}">{{ $inmobiliaria->nombre_empresa }}</option>
                @endif
                @endforeach
            </select>
            @error('inmobiliaria')
            <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="ciudad">Ciudad</label>
            <select id="ciudad" class="form-control" name="ciudad">
                <option selected>Buenaventura </option>
            </select>
            @error('ciudad')
            <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>

        <div class="form-row">
            <div class="form-group ">
                <label for="departamento">departamento</label>
                <select id="departamento" class="form-control" name="departamento">
                    <option selected>valle del cauca</option>
                </select>
                @error('departamento')
                <span class="text-danger"> {{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-row">

<div class="form-group col-md-6">
    <label for="image">Subir imagenes</label>
    <input type="file" class="form-control-file" id="image" name="image">
    @error('image')
    <span class="text-danger"> {{ $message }}</span>
    @enderror
</div>
<div class="form-group col-md-6">
    <label for="image2">Subir imagenes</label>
    <input type="file" class="form-control-file" id="image2" name="image2">
    @error('image')
    <span class="text-danger"> {{ $message }}</span>
    @enderror
</div>
<div class="form-group col-md-6">
    <label for="image3">Subir imagenes</label>
    <input type="file" class="form-control-file" id="image3" name="image3">
    @error('image')
    <span class="text-danger"> {{ $message }}</span>
    @enderror
</div>
</div>
        <!-- <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck" name="termino">
                <label class="form-check-label" for="gridCheck">
                    Aceptar terminos y condiciones
                </label>
                @error('termino')
                <span class="text-danger"> {{ $message }}</span>
                @enderror
            </div>
        </div> -->
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Inmuebles
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Inmueble</th>
                        <th>EMPRESA</th>
                        <th>Ciudad</th>
                        <th>Precio</th>
                        <th>Direccion</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($inmuebles as $inmueble)
                    <tr>
                        <td><a href="{{ url('/inmueble/'.$inmueble->id) }}">{{ $inmueble->nombre }}</a></td>
                        <td><a href="{{ url('/inmueble/'.$inmueble->id) }}">{{ $inmueble->inmobiliaria->nombre_empresa }}</a></td>
                        <td><a href="{{ url('/inmueble/'.$inmueble->id) }}">{{ $inmueble->ciudad }}</a></td>
                        <td><a href="{{ url('/inmueble/'.$inmueble->id) }}">{{ $inmueble->precio }}</a></td>
                        <td><a href="{{ url('/inmueble/'.$inmueble->id) }}">{{ $inmueble->direccion }}</a></td>
                    </tr>
                    @endforeach
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
