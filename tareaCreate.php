<!DOCTYPE html>
<?php
	include('conexion.php');
?>
<html>

<head>
	<meta charset="utf-8">
	<title>Registro</title>
</head>

<body>
	<h1 id="arriba">Datos del alumno</h1>
	
	<form action="tareaStore.php" method="POST">
		<label for="grado">Grado:</label>
		<input type="number" name="grado">
		<br> <br>
		<label for="materia">Materia:</label>
		<input type="text" name="materia">
		<br> <br>
        <label for="descripcion">Tarea:</label>
		<input type="text" name="descripcion">
		<br> <br>
		<button type="submit">Enviar</button>
	</form>

    </body>
    



</html>