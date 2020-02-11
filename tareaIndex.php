<!DOCTYPE html>
<?php
	include('tarea.php');
?>
<html>

<head>
	<meta charset="utf-8">
	<title>Tarea Index</title>
</head>

<body>
    <h1>TAREAS </h1>
        <hr>
    <a href="tareaCreate.php"> Tareas Pendientes </a>

    <?php
    /*TABLA DE TAREAS*/

    $t = new Tarea();
    $tareas = $t ->index();
    ?>

    <table border = "2">
    <tr>
        <th>id</ht>
        <th>Grupo</ht>
        <th>Materia</th>
        <th>Descripcion</th>
    </tr>

    <?php 
    if(isset($tareas) && count($tareas) > 0)
    foreach ($tareas as $tarea) {
        # code...
        echo "<tr>";
        echo "<td>" . $tarea['id'] . "</td>";
        echo "<td>" . $tarea['grado'] . "</td>";
        echo "<td>" . $tarea['materia'] . "</td>";
        echo "<td>" . $tarea['descripcion'] . "</td>";
        echo "</tr>";
    }
    
    ?>
    </table>
</body>

</html>
