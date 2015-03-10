<?php
	include('controlador/conexion.php');
	class Msector
	{
		function msector()
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
		function seleccionar_eje($ideje)
		{
			$sql = "SELECT * FROM tbeje WHERE idtbeje = $ideje;";
			$conexionBD = new conexion();
			$conexionBD->conectarBD();
			$data = $conexionBD->ejeCon($sql,0);
			return $data;
		}

		/*
		* Función para seleccionar los sectores por argumento enviado
		*/
		function seleccionar_sector_eje($eje)
		{
			$sql = "SELECT * FROM tbsector WHERE ideje = $eje;";
			$conexionBD = new conexion();
			$conexionBD->conectarBD();
			$data = $conexionBD->ejeCon($sql,0);
			return $data;
		}


	}