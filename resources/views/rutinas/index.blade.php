@extends('layouts.panel')
@section('content')
  <div class="row mt-5">
    <div class="col-xl-12 mb-5 mb-xl-0">
      <div class="card shadow">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Rutinas</h3>
            </div>
            
          </div>
        </div>
        <div class="card-body">
            @if(session('notification'))
              <div class="alert alert-success" role="alert">
                  {{session('notification')}}
              </div>
            @endif
        </div>
        <div class="table-responsive">
          <!-- Projects table -->
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Descripción Rutina</th>
                <th scope="col">Fecha Vencimiento</th>
                <th scope="col">Opciones</th>
                
              </tr>
            </thead>
            <tbody>
                @foreach ($rutinas as $rutina)           
              <tr>
                <th>
                  {{ $rutina->id }}
                </th>
                <th scope="row">
                  {{$rutina->Descripcion_rutina}}
                </th>
                <td>
                  {{$rutina->Vence_rutina}}
                </td>
                <td>
                  
                    <form action="{{ url('/rutinas/'.$rutina->id)}}" method="POST">
                      @csrf
                      @method('DELETE')
                      
                      <a href="{{ url('/rutinas/'.$rutina->id.'/editar')}}" class="btn btn-sm btn-primary">Editar</a>
                      <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                      </form>  
                 
                </td>
                    
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
@endsection