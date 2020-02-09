<?php

namespace App\Http\Controllers;

use App\calificacion;
use Illuminate\Http\Request;

class calificacionController extends Controller
{
    public function list(){
        $calificacion = calificacion::all();
        return $calificacion;
        }
    
    public function create(Request $request){
        $calificacion = calificacion::create([
            'id_aprendiz' => $request -> id_aprendiz,
            'id_materia' => $request -> id_materia,
            'nota1' => $request -> nota1,
            'nota2' => $request -> nota2,
            'nota3' => $request -> nota3,
            'nota_final' => $request -> notafinal
        ]);
        return response()->json($calificacion, 201);
    }
    
    public function update(Request $request, $id){
        $calificacion = calificacion::where('id_calificacion','=', $id);
    
        $calificacion -> update(array(
            'id_aprendiz' => $request -> id_aprendiz,
            'id_materia' => $request -> id_materia,
            'nota1' => $request -> nota1,
            'nota2' => $request -> nota2,
            'nota3' => $request -> nota3,
            'nota_final' => $request -> notafinal
        ));
    }
    
    public function delete($id){
        $calificacion = calificacion::where('id_calificacion', $id)-> delete();
        return response()->json(['status' => '200', 'Message' => 'Calificacion borrada correctamente']);
    }
}
