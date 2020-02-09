<?php

namespace App\Http\Controllers;

use App\materia;
use Illuminate\Http\Request;

class materiaController extends Controller
{
    public function list(){
        $materia = materia::all();
        return $materia;
        }
    
    public function create(Request $request){
        $materia = materia::create([
            'id_materia' => $request -> id_materia,
            'id_curso' => $request -> id_curso,
            'nombre_materia' => $request -> nombre_materia,
            'id_aprendiz' => $request -> id_aprendiz,
            
        ]);
        return response()->json($materia, 201);
    }
    
    public function update(Request $request, $id){
        $materia = materia::where('id_materia','=', $id);
    
        $materia -> update(array(
            'id_materia' => $request -> id_materia,
            'id_curso' => $request -> id_curso,
            'nombre_materia' => $request -> nombre_materia,
            'id_aprendiz' => $request -> id_aprendiz,
        ));
    }
    
    public function delete($id){
        $materia = curso::where('id_materia', $id)-> delete();
        return response()->json(['status' => '200', 'Message' => 'Materia borrada correctamente']);
    }
}
