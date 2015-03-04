<?php
include ("controlador/conexion.php");
class musuario{
	var $arr;
	
	function musuario(){}
	
	function cons($c)
	{
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$conexionBD->ejeCon($c,1);
	}
	
	function insusu($documento, $nombre, $email, $pass, $foto, $perfil)
	{
		$sql = "INSERT INTO  tbusuario (documento, nombre, email, pass, foto, perfil) values ('".$documento."','".$nombre."','".$email."','".$pass."' ,'".$foto."','".$perfil."');";
		$this->cons($sql);
	}

	function updusu($numdocusu, $nomusu, $apeusu, $passusu, $perusu, $estusu)
	{
		$sql = "UPDATE tbusuario SET nomusu='".$nomusu."', password='".$passusu."', perfil='".$perusu."', estado='".$estusu."' WHERE numdocusu ='".$numdocusu."';";
		$this->cons($sql);
	}

	function updpass($numdocusu, $passusu)
	{
		$sql = "UPDATE tbusuario SET pass='".$passusu."' WHERE documento ='".$numdocusu."';";
		$this->cons($sql);
	}

	function selusu()
	{
		$sql = "SELECT us.documento, us.nombre, p.nomper FROM tbusuario as us INNER JOIN tbperfil as p ON us.perfil=p.idperfil;";
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$data = $conexionBD->ejeCon($sql,0);
		return $data;
	}
	function selusu1($numdocusu)
	{
		$sql = "SELECT us.nombre, us.pass, p.nomper FROM tbusuario as us INNER JOIN tbperfil as p ON us.perfil=p.idperfil WHERE documento = '".$numdocusu."';";
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$data = $conexionBD->ejeCon($sql,0);
		return $data;
	}
	function delapre($numdocusu)
	{
		$sql =  "DELETE FROM tbusuario WHERE documento='".$numdocusu."';";
		$this->cons($sql);
	}
    
    function selper(){
		$sql = "SELECT * FROM tbperfil;";
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$data = $conexionBD->ejeCon($sql,0);
		return $data;
	}
}
?>