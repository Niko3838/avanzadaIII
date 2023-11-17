<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\program;
use App\Models\Faculty;

class Programas extends Controller
{
    public function index()
    {
        $programas = DB::table('programa')
                    -> join('facultad','codfacultad','=','fk_facultad')->get();
        return view('programas.listado',['program'=> $programas]);
    }

    public function form_registrar(Request $request)
    {
        if($request->method() === 'GET'){
            $facultades = DB::table('facultad')->get();
            return view('programas.form_registro',['faculty'=>$facultades]);
        } elseif($request->method() === 'POST'){
            $programa = new program();
            $programa->codprograma = $request->input('cod_program');
            $programa->nomprograma = $request->input('nom_program');
            $programa->fk_facultad = $request->input('fk_facultad');
            $programa->save();
            return redirect()->route('programas_listado');
        }     
    }
}
