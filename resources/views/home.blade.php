@extends('layout.plantilla')


@section('title', 'Home')

@section('content')
<div class="card">
    <div class="card-header">
      Featured
    </div>
    <div class="card-body">
      <h5 class="card-title">Special title treatment</h5>
      @php
        print_r($datos);
      @endphp
      <p class="card-text">
        <div class="table table-responsive">
            <table class="table table-sm table-bordered">
                <thead>
                    <th>Numero de empleado</th>
                    <th>Nombre</th>
                    <th>Hora de checada</th>
                </thead>
                <tbody>

                    @foreach ($datos as $item)
                        
                   
                    <tr>
                        <td></td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->password}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      </p>

    </div>
  </div>
@endsection
