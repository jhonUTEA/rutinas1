@extends('layouts.panel')
@section('content')
  <div class="row mt-5">
    <div class="col-xl-12 mb-5 mb-xl-0">
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Editar Rutina</h3>
            </div>
            <div class="col text-right">
              <a href="{{ url('/rutinas')}}" class="btn btn-sm btn-success">
                <i class="fas fa-chevron-left"></i>
                Regresar</a>
            </div>
          </div>
        </div>
        
        <div class="card-body">

            @if ($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        <i class="fas fa-exclamation-triangle"></i>
                        <strong>Por favor!</strong> {{ $error}}
                    </div>
                @endforeach

            @endif


            <form action="{{ url('/rutinas/'.$rutina->id)}}" method="POST">
                @csrf
                @method('PUT')  
                <div class="form-group">
                    <label for="Descripcion_rutina">Nombre de la Rutina</label>
                    <input type="text" name="Descripcion_rutina" class="form-control" value="{{old('Descripcion_rutina',$rutina->Descripcion_rutina)}}"  required>
                </div>

                <div class="form-group">
                    <label for="Vence_rutina">Vencimiento Rutina</label>
                    <input type="date" name="Vence_rutina" class="form-control" value="{{old('Vence_rutina',$rutina->Vence_rutina)}}">
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Guardar Rutina</button>
            </form>
        </div>
      </div>

@endsection