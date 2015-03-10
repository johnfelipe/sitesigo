<?php
include('controlador/conexion.php');
	class Mmetasprod
	{
		function Mmetasprod()
		{

		}
		/*
		* Función para seleccionar los sectores
		*/
		function seleccionar_sectores()
		{
			$sql = "SELECT * FROM tbsector;";
			$conexionBD = new conexion();
			$conexionBD->conectarBD();
			$data = $conexionBD->ejeCon($sql,0);
			return $data;
		}

		/*
		* Función para seleccionar eje por argumento enviado
		*/
		function seleccionar_sector($idsector)
		{
			$sql = "SELECT * FROM tbsector WHERE idtbsector = $idsector;";
			$conexionBD = new conexion();
			$conexionBD->conectarBD();
			$data = $conexionBD->ejeCon($sql,0);
			return $data;
		}

		/*
		* Función para seleccionar los programas por argumento enviado
		*/
		function seleccionar_programa_sector($idprograma)
		{
			$sql = "SELECT * FROM tbprograma WHERE sector = $idprograma;";
			$conexionBD = new conexion();
			$conexionBD->conectarBD();
			$data = $conexionBD->ejeCon($sql,0);
			return $data;
		}


	}