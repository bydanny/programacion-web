<?php
/**
  * Conexión a DB
  */
class Conexion {
	public $conexionBD;
	
	function __construct()
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "alumnobd";

		try {
			// Create connection
			$this->conexionBD = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			// set the PDO error mode to exception
			$this->conexionBD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    }
		catch(PDOException $e)
			{
			echo "Connection failed: " . $e->getMessage();
			}

    }
	
	

}

?>