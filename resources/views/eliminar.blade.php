@extends('layout.plantilla')
@section("tituloPagina","Crear un nuevo registro")
@section('contenido')

<br><br>
<div class="card">
    <h5 class="card-header"style="background-color: rgba(248, 215, 218, 0.829) ">Eliminar una persona</h5>
    <div class="card-body" style="background-color: rgba(242, 242, 242, 0.829) ">
      
      <p class="card-text">
        <div class="alert alert-danger" role="alert">
            SEGURO QUE DESEAS ELIMINAR?
            <table class="table table-sm table-hover">
                <thead>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Nombre</th>
                    <th>Fecha de nacimiento</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$personas->paterno}}</td>
                        <td>{{$personas->materno}}</td>
                        <td>{{$personas->nombre}}</td>
                        <td>{{$personas->fecha_nacimiento}}</td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <form action="{{route('personas.destroy', $personas->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <a href="{{route('personas.index')}}"class="btn btn-info">Regresar</a>
                <button class="btn btn-danger">Eliminar</button>
            </form>
          </div>
      </p>
      

    </div>
  </div>

@endsection

