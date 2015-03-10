<?php
	include('controlador/conexion.php');
	class Meje
	{
		public function __construct()
		{

		}

		function meje()
		{

		}

		/*
		* Función para seleccionar los ejes
		*/
		function seleccionar_eje()
		{
			$sql = "SELECT * FROM tbeje;";
			$conexionBD = new conexion();
			$conexionBD->conectarBD();
			$data = $conexionBD->ejeCon($sql,0);
			return $data;
		}
		
		/*
		* Función para seleccionar los sectores por argumento enviado
		*/
		function seleccionar_sector($ideje)
		{
			$sql = "SELECT * FROM tbsector WHERE ideje = $eje;";
			$conexionBD = new conexion();
			$conexionBD->conectarBD();
			$data = $conexionBD->ejeCon($sql,0);
			return $data;
		}


	}