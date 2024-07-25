@extends('layouts.panel')
@section('content')


<div class="row mt-5">
    <div class="col-xl-12 mb-5 mb-xl-0">
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Nueva Tarea</h3>
            </div>
            <div class="col text-right ">
             <a href="{{ url('/rutinas')}}" class="btn btn-sm btn-success" >
                <i class="ti ti-arrow-left"></i>
                Salir</a>
            </div>
          </div>
        </div>
    </div>
</div>
</div>

<div class="row mt-3">
<div class="col-xl-12 mb-5 mb-xl-0">
    <div class="card shadow-lg">
        <div class="card-body">
            <form role="form" action="{{ url('/rutinas')}}" method="POST">
                @csrf
                
                <div class="form-group col-md-6">
                    
                    <input type="text" name="Descripcion_rutina" class="form-control" value="{{old('Descripcion_rutina')}}"  required>
                    <label for="Descripcion_rutina">Describe la rutina</label>
                </div>

                <div class="form-group col-md-2">
                    <input type="date" placeholder="Vence_rutina" name="Vence_rutina" class="form-control" value="{{old('Vence_rutina')}}"  required>
                     
                </div>
                <div class="form-group col-md-4">
                    <label for="Vence_rutina">Vencimiento de la rutina</label>
                </div>
                
            

                <button type="submit" class="btn btn-sm btn-primary">Crear Rutina</button>
            </form>
        </div>
      </div>
    </div>
    </div>
@endsection