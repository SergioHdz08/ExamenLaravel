<?php

namespace App\Http\Controllers;

use App\Models\libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['libros']=libro::paginate(10);
        return view('libro.index', $datos);
        return view('libro.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('libro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $campos = [
            'Autor' => 'required|string',
            'Titulo' => 'required|string',
            'Edicion' => 'required|string',
            'DatosPublicacion' => 'required|string',
            'TipoContenido' => 'required|string',
            'Restricciones' => 'required|string',
            'Materia' => 'required|string',
            'Proveedor' => 'required|string',
        ];

        $mensaje=[
            'required' => 'El :attribute es requerido'
        ];

        $this->validate($request, $campos, $mensaje);

        $datosLibro= request()->except('_token');
        libro::insert($datosLibro); 
        

        return redirect('libro')->with('mensaje', 'Se ha registrado el libro con Éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function show(libro $libro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $libro = libro::findOrFail($id);
        return view('libro.edit', compact('libro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //

        $campos = [
            'Autor' => 'required|string',
            'Titulo' => 'required|string',
            'Edicion' => 'required|string',
            'DatosPublicacion' => 'required|string',
            'TipoContenido' => 'required|string',
            'Restricciones' => 'required|string',
            'Materia' => 'required|string',
            'Proveedor' => 'required|string',
        ];

        $mensaje=[
            'required' => 'El :attribute es requerido'
        ];

        $this->validate($request, $campos, $mensaje);

        $datosLibro= request()->except(['_token','_method']);
        

        $libro = libro::findOrFail($id);
        
        libro::where('id', '=', $id)->update($datosLibro);
        //return view('libro.edit', compact('libro'));
        return redirect('libro')->with('mensaje', 'Se ha Modificado el libro con Éxito');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        libro::destroy($id);
        
        return redirect('libro')->with('mensaje', 'Se ha eliminado el libro con Exito');

    }
}
