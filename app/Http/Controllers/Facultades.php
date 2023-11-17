<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Faculty;


class Facultades extends Controller
{
    public function index()
    {
        $facultades = DB::table('facultad')->get();
        return view('facultades.listado', ['faculty'=>$facultades]);
    }

    public function form_registro()
    {
        return view('facultades.form_registro');
    }
 
    public function registrar(Request $request)
    {
        $facultad = new Faculty();
        $facultad->codfacultad = $request->input('cod_facultad');
        $facultad->nomfacultad = $request->input('nom_facultad');
        $facultad->save();
        return redirect()->route('facultades_listado');
    }
    
    public function eliminar($id){
        $facultad = Faculty::findorFail($id); //buscra un registro por su id   echo$facultad
        $facultad-> delete ;
        return redirect()->route('facultades_listado');
        
    }

    public function form_edicion($id){
        $facultad = Faculty::findorFail($id);
        return view ('facultades.form_edicion',['faculty' => $facultad]);
    }

    public function editar(Request $request, $id){
        $facultad = Faculty::findOrfail($id);
        $facultad -> nomfacultad= $request-> input('nom_facultad');
        $facultad -> save();
        return redirect()->route('facultades_listado');
    }
}