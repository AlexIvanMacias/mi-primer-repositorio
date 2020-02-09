<?php

namespace App\Http\Controllers;

use App\users;
use Illuminate\Http\Request;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

class usersController extends Controller
{
     //------------CRUD--BASICO--------------------------------------------------
   public function list(){
    $users = users::all();
    return $users;
    }

public function create(Request $request){
    $users = users::create([
        'id_rol' => $request -> id_rol,
        'nombre' => $request -> nombre,
        'apellido' => $request -> apellido,
        'cedula' => $request -> cedula,
        'correo' => $request -> correo,
        'contraseña' => Crypt::encryptString($request -> contraseña),
        'celular' => $request -> celular,
        'id_status' => $request -> status
    ]);
    return response()->json($users, 201);
}

public function update(Request $request, $id){
    $users = users::where('id_user','=', $id);

    $users -> update(array(
        'id_rol' => $request -> id_rol,
        'nombre' => $request -> nombre,
        'apellido' => $request -> apellido,
        'cedula' => $request -> cedula,
        'correo' => $request -> correo,
        'contraseña' => Crypt::encryptString($request -> contraseña),
        'celular' => $request -> celular,
        'id_status' => $request -> status
    ));
}

public function delete($id){
    $users = users::where('id_user', $id)-> delete();
    return response()->json(['status' => '200', 'Message' => 'User deleted Succesfully']);
}

public function login(Request $request){

    try {
        $basic = users::select('contraseña')->where('correo', '=', $request-> correo)->get();
        $pass = Crypt::decryptString($basic[0]->contraseña);
        if($pass === $request -> contraseña){

            $users = users::select('id_user','id_rol','id_status','nombre')->where('correo', '=', $request-> email)->get();
            return response()->json($users);
        }else{
            return response()->json("contrasena incorrecta");  
        }
    } catch (DecryptException $e) {
        return response()->json("salio mal");
    }
    
}

//-----SEARCHS------------------------------------------------------
public function getById($id){
    $users = users::where('id_user', $id)-> get();
    return response()->json($users);
}

public function getByEmailDocument(Request $request){
    $users = users::where('cedula', $request -> val)->orwhere('correo', $request -> val)-> get();
    return response()->json($users);
}

public function getByDocument($doc){
    $users = users::where('cedula', $doc)-> get();
    return response()->json($users);
}
}
