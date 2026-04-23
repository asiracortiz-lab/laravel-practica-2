<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function formulario(){
return view('formulario');
}
public function procesar(Request $request){
// Validación
$request->validate([
'nombre' => 'required',
'edad' => 'required|numeric',
'ocupacion' => 'required'
]);
// Obtener datos
$nombre = $request->input('nombre');
$edad = $request->input('edad');
$ocupacion = $request->input('ocupacion');
// Lógica
if ($edad >= 18) {
$mensaje = "Eres mayor de edad";
} else {
$mensaje = "Eres menor de edad";
}
// Retornar vista
return view('resultado', [
'nombre' => $nombre,
'edad' => $edad,
'ocupacion' => $ocupacion,
'mensaje' => $mensaje
]);
}
}
