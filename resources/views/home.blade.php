@extends('layout.plantilla')


@section('title', 'Home')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="card">
    <div class="card-header" >
      <img id="img1" src="https://g-global.com/wp-content/uploads/2023/04/G-Global_Logo_ENGLISH-01.png" alt="Logo G-Global">
    </div>
    <nav class="navbar navbar-light bg-light">
      
      <div class="containers">
        <!--<div class="search"> 
          <input type="search" name="search" id="search" 
          placeholder="Search Something Here" class="form-control">
        </div>-->
        <form class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Coloca Numero de empleado" aria-label="Search" id="search">
        </form>
      </div>
    </nav>
    <div class="card-body">
      <h5 class="card-title">LISTA DE ASISTENCIAS</h5>
      
      <p class="card-text">
        <div class="table table-responsive">
          <div class="d-flex justify-content-end">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="redirigir()">Enviar</button>
          <script>
            function redirigir() {
              window.location.href = '/justificacion';
            }
          </script>

          </div>
          <table class="table table-striped" >
            <thead>
              <tr>
                <th scope="col">#Empleado</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Checada</th>
                <th scope="col">Justificar</th>
              </tr>
            </thead>
              <tbody id="Content">
                
              </tbody>

          </table>
          
         
        </div>
      </p>

    </div>
    
  </div>
  <script type="">
    $('#search').on('keyup',function()
    {
      $value=$(this).val();
      //alert($value);
      $.ajax({
        type:'get',
        url:'{{URL::to('search')}}',
        data:{'search':$value},

        success:function(data)
        {
          console.log(data);
          $('#Content').html(data);
        }
      });
    })
    </script>
@endsection
