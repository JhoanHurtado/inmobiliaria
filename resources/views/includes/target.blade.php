<h1 class="mt-4">Casas Verdes</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">@yield('title')</li>
</ol>

<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">CLIENTES</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{ url('/clientes') }}"> {{ $cantidad_clientes }}
                    Registrados</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body">Registros inmobiliaria </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link"
                    href="{{ url('/inmobiliaria') }}">{{ $cantidad_inmobiliaria }}
                    Registrados</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">Inmuebles</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{ url('/inmuebles') }}">{{ $cantidad_inmuebles }} Registrados</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-white mb-4">
            <div class="card-body">Otros</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">sin novedad</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</div>
