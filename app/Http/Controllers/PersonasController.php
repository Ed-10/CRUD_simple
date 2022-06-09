<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{

    public function index()
    {
        //Pagina de inicio
        $datos = Personas::paginate(5);
        return view('inicio', compact('datos'));
    }


    public function create()
    {
        //Formulario donde se agregan datos
        return view('agregar');
    }

    public function store(Request $request)
    {
        //Guarda datos en la BD
        $personas=new Personas();
        $personas->paterno = $request->post('paterno');
        $personas->materno = $request->post('materno');
        $personas->nombre = $request->post('nombre');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();

        return redirect()->route("personas.index")->with("success","Agregado con exito");
    }

    public function show($id)
    {
        //Sierve para optener un registro de la tabla
        $personas = Personas::find($id);
        return view("eliminar", compact('personas'));

    }

    public function edit($id)
    {
        //Sirve para traer datos que se van a editar y van en un formulario
        
        $personas = Personas::find($id);
        return view("actualizar", compact('personas'));
        
    }

    public function update(Request $request, $id)
    {
        //Metodo que actualiza datos en la BD
        $personas=Personas::find($id);
        $personas->paterno = $request->post('paterno');
        $personas->materno = $request->post('materno');
        $personas->nombre = $request->post('nombre');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();

        return redirect()->route("personas.index")->with("success","Actualizado con exito");
        
    }


    public function destroy($id)
    {
        //Elimina un registro y muestra el dato a
        $personas = Personas::find($id);
        $personas->delete();
        return redirect()->route("personas.index")->with("success","Eliminado con exito");
    }
}
