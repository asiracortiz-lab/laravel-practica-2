@extends('layouts.app')
@section('contenido')
<h2>Formulario de Usuario</h2>
<form method="POST" action="/procesar">
@csrf
<label>Nombre:</label>
<input type="text" name="nombre">
<br><br>
<label>Edad:</label>
<input type="number" name="edad">
<br><br>
<label>Ocupación:</label>
<select name="ocupacion">
<option value="estudiante">Estudiante</option>
<option value="profesionista">Profesionista</option>
<option value="otro">Otro</option>
</select>
<br><br>
<button type="submit">Enviar</button>
</form>
@endsection