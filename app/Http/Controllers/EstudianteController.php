<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeEstudianteRequest;
use App\Models\Curso;
use App\Models\Departamento;
use App\Models\Estudiante;
use App\Models\Municipio;
use App\Models\Pais;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datoestudiante = Estudiante::all();
        return view('estudiantes.index', compact('estudiantico'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paises = Pais::all();
        $departamentos = Departamento::all();
        $municipios = Municipio::all();
        $datos = Curso::all();
        return view('estudiantes.create', compact('paises','departamentos', 'municipios', 'datos'));
        // return $paises;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeEstudianteRequest $request)
    {
        $datoestudiante = new Estudiante();//Lo que hicimos fue crear una instancia de la clase Curso
    //Se devuelve la peticion hecha al servidor
        //return $request->all();
        $datoestudiante->tipoDoc = $request->input('tipoDoc');
        $datoestudiante->numDoc = $request->input('numDoc');
        $datoestudiante->idMuniExp = $request->input('idMuniExp');
        $datoestudiante->fechaExp = $request->input('fechaExp');
        $datoestudiante->nombres = $request->input('nombres');
        $datoestudiante->primerApellido = $request->input('primerApellido');
        $datoestudiante->segundoApellido = $request->input('segundoApellido');
        $datoestudiante->genero = $request->input('genero');
        $datoestudiante->estrato = $request->input('estrato');
        $datoestudiante->idMuniExp = $request->input('idMuniExp');
        $datoestudiante->idCurso = $request->input('idCurso');
        $datoestudiante->idMuni = $request->input('idMuni');
        if($request->hasFile('docIdent')){
            $datoestudiante->docIdent = $request->file('docIdent')->store('public/estudiante');
        }
        $datoestudiante->save();//Con el comando save se registra la info en la db
        return view('estudiantes.add');
        //return $request;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datoestudiante = Estudiante::find($id);
        $query1 = Municipio::join(
            'estudiante', 'estudiante.idMuniExp', 'municipios.id'
        )
        ->join('departamentos', 'departamentos.id', 'municipios.idDep')
        ->join('pais', 'pais.id', 'departamentos.idPais')
        ->where('estudiante.id', $id)
        ->select('municipios.nombreMunici as nombreMuni', 'departamentos.nombreDepa as nombreDepart', 'pais.nombrePais as nomPais')
        ->get();

        $query2 = Municipio::join(
            'estudiantes', 'estudiantes.idMuni', 'municipios.id'
        )
        ->join('departamentos', 'departamentos.id', 'municipios.idDep')
        ->join('pais', 'pais.id', 'departamentos.idPais')
        ->where('estudiantes.id', $id)
        ->select('municipios.nombreMunici as nombreMuni', 'departamentos.nombreDepa as nombreDepart', 'pais.nombrePais as nomPais')
        ->get();

        return view('estudiante.show', compact('datoestudiante', 'query1', 'query2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datoestudiante= Estudiante::find($id);
        $paises = Pais::all();
        $departamentos = Departamento::all();
        $municipios = Municipio::all();
        $datos = Curso::all();
        return view('estudiante.edit', compact('datoestudiante', 'paises', 'departamentos', 'municipios', 'datos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datoestudiante = Estudiante::find($id);
        $paises = Pais::all();
        $departamentos = Departamento::all();
        $municipios = Municipio::all();
        $datos = Curso::all();
        $datoestudiante->fill($request->except('docIdent'));
        if($request->hasFile('docIdent')){
            $datoestudiante->docIdent = $request->file('docIdent')->store('public/estudiante');
        }
        $datoestudiante->save();
        return view('estudiante.upload', compact('datoestudiante', 'paises', 'departamentos', 'municipios', 'datos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datoestudiante = Estudiante::find($id);
        $paises = Pais::all();
        $departamentos = Departamento::all();
        $municipios = Municipio::all();
        $datos = Curso::all();
        $urldocIdentBD = $datoestudiante->docIdent;
        $nombreImagen = str_replace('public/', '\storage\\', $urldocIdentBD);
        $rutaCompleta = public_path().$nombreImagen;
        unlink($rutaCompleta);
        $datoestudiante -> delete();
        return view('estudiante.delete', compact('datoestudiante', 'paises', 'departamentos', 'municipios', 'datos'));
    }
}