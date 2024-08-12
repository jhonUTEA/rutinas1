@extends('layouts.panel')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('BIENVENIDO PROYECTO ToDo List -Ingenieria de Software II - UTEA - ABANCAY') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            <!-- solucion de inicializacion -->
                        </div>
                    @endif

                    {{ __('PULSA EN AGREGAR TAREA Y EMPEZEMOS.....') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
