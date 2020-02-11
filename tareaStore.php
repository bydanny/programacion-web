<?php
include('tarea.php');
$tarea = new Tarea();
$tarea->store();

header('Location: tareaIndex.php');

?>