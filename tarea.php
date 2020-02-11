<?php
include('conexion.php');

class Tarea extends conexion
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
    
        $stmt = $this->conexionBD->prepare("SELECT * FROM alumnot");
        $stmt->execute();
        
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }

	public function store()
	{

        //Recibe Formulario
    if (!empty($_POST['grado']) && !empty($_POST['materia']) && !empty($_POST['descripcion'])) {
	    $grado = $_POST['grado'];
        $materia = $_POST['materia'];
        $descripcion = $_POST['descripcion'];
    }
		$sql = "INSERT INTO alumnot (grado, materia, descripcion) 
        VALUES ($grado, '$materia','$descripcion')";

        $this->conexionBD->exec($sql);
        
        // set the resulting array to associative
		/*$stmt->setFetchMode(PDO::FETCH_ASSOC);
		
        return $stmt->fetchAll();*/
        
        //$sql = 'INSERT INTO conexionBD'

      /*  
         
         */
    }
    

}
?>