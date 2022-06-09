@extends('layout.plantilla')
@section('tituloPagina', 'CRUD')
@section('contenido')

<br><br>
<div class="card">
    <h5 class="card-header text-center"style="background-color: rgba(121, 82, 179, 0.829) ">CRUD Registro de datos personales UNAM</h5>
    <div class="card-body"style="background-color: rgba(242, 242, 242, 0.829) ">
        <div class="row">
            <div class="col-sm-12">
                @if ($mensaje = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{$mensaje}}
                  </div>
                @endif
            </div>
        </div>
      <p>
        <a href="{{route("personas.create")}}" class="btn btn-primary">
            <span class="fas fa-user-plus"></span> Ingrese nueva personas
        </a>
      </p>
      <hr>
      <p class="card-text"></p>
        <div class="table table-responsive">
            <table class="table table-sm ">
                <thead>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Nombre</th>
                    <th>Fecha de naciemiento</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </thead>
                <tbody>
            @foreach ($datos as $item)
                    <tr>
                        <td>{{$item -> paterno}}</td>
                        <td>{{$item -> materno}}</td>
                        <td>{{$item -> nombre}}</td>
                        <td>{{$item -> fecha_nacimiento}}</td>
                        <td>
                            <form action="{{route("personas.edit", $item->id)}}" method="GET">
                                <button class="btn btn-warning btn-sm">
                                    <span class="fas fa-user-pen fa-fw"></span>
                                </button>
                            </form>
                        </td>
                        
                        <td>
                            <form action="{{route("personas.show", $item->id)}}" method="GET">
                                <button class="btn btn-danger btn-sm">
                                    <span class="fa-solid fa-user-xmark"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
            @endforeach
                </tbody>
            </table>
            <hr>
            <div class="col-sm-12">
                {{$datos->links()}}
            </div>
        </div>
    </div>
  </div>
@endsection