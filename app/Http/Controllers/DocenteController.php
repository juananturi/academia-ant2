<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeDocenteRequest;
use App\Models\docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datosdocente = Docente::all();
        return view('docentes.index', compact('datosdocente')); //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docentes.create');//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeDocenteRequest $request)
    {
        $datosdocente = new Docente();
        $datosdocente->nombres = $request->input('nombres');
        $datosdocente->apellidos = $request->input('apellidos');
        $datosdocente->titulo = $request->input('titulo');
        $datosdocente->edad = $request->input('edad');
        $datosdocente->fecha = $request->input('fecha');
        if($request->hasFile('imagen')){
            $datosdocente->imagen = $request->file('imagen')->store('public/docentes/imagenes');
        }
        if($request->hasFile('documento')){
            $datosdocente->documento = $request->file('documento')->store('public/docentes/documentos');
        }
        $datosdocente->save();
        return view('docentes.add'); //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datosdocente = Docente::find($id);
        return view('docentes.show', compact('docentico'));//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datosdocente = Docente::find($id);
        return view('docentes.edit', compact('docentico')); //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosdocente = Docente::find($id);
        $datosdocente->fill($request->except('imagen'));
        if($request->hasFile('imagen')){
            $datosdocente->imagen = $request->file('imagen')->store('public/docentes');
        }
        $datosdocente->fill($request->except('documento'));
        if($request->hasFile('documento')){
            $datosdocente->documento = $request->file('documento')->store('public/docentes');
        }
        $datosdocente->save();
        return view('docentes.upload'); //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datosdocente = Docente::find($id);
        $urlImagenBD = $datosdocente->imagen;
        $nombreImagen = str_replace('public/', '\storage\\', $urlImagenBD);
        $rutaCompleta = public_path().$nombreImagen;
        
        $datosdocente -> delete();
        return view('docentes.delete');//
    }
}
