<?php

namespace App\Http\Controllers;

use App\curso;
use Illuminate\Http\Request;

class cursoController extends Controller
{
    public function list(){
        $curso = curso::all();
        return $curso;
        }
    
    public function create(Request $request){
        $curso = curso::create([
            'id_aprendiz' => $request -> id_aprendiz,
            'id_curso' => $request -> id_curso,
            'nombre_curso' => $request -> nombre_curso,
            'id_docente' => $request -> id_docente,
            
        ]);
        return response()->json($curso, 201);
    }
    
    public function update(Request $request, $id){
        $curso = curso::where('id_curso','=', $id);
    
        $curso -> update(array(
            'id_aprendiz' => $request -> id_aprendiz,
            'id_curso' => $request -> id_curso,
            'nombre_curso' => $request -> nombre_curso,
            'id_docente' => $request -> id_docente,
        ));
    }
    
    public function delete($id){
        $curso = curso::where('id_curso', $id)-> delete();
        return response()->json(['status' => '200', 'Message' => 'Curso borrado correctamente']);
    }
}
