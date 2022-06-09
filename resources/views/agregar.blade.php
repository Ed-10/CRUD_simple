@extends('layout.plantilla')
@section("tituloPagina","Crear un nuevo registro")
@section('contenido')

<br><br>
<div class="card">
    <h5 class="card-header" style="background-color: rgba(121, 82, 179, 0.829) " >Agregar nueva persona</h5>
    <div class="card-body" style="background-color: rgba(242, 242, 242, 0.829) ">
      
      <p class="card-text">
          <form action="{{route('personas.store')}}" method="POST">
            @csrf
              <label for="">Apellido paterno</label>
              <input 
              type="text" 
              name="paterno" 
              class="form-control" 
              id="pat" 
              onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" 
              onkeydown="return /[a-z, ]/i.test(event.key)" 
              required >

              <label for="">Apellido materno</label>
              <input 
              type="text" 
              name="materno" 
              class="form-control" 
              id="mat" 
              onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" 
              onkeydown="return /[a-z, ]/i.test(event.key)" 
              required>

              <label for="">Nombre</label>
              <input 
              type="text" 
              name="nombre" 
              class="form-control" 
              id="nom" 
              onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" 
              onkeydown="return /[a-z, ]/i.test(event.key)" 
              required>

              <label for="">Fecha de nacimiento</label>
              <input 
              type="date" 
              name="fecha_nacimiento" 
              class="form-control" 
              required>              
              <br>
              <button class="btn btn-primary">Agregar</button>
              <a href="{{route("personas.index")}}" class="btn btn-info">Regresar</a>
          </form>
      </p>
      

    </div>
  </div>

@endsection

