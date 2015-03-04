<?php
	include("modelo/musuariosis.php");

	$ins = new musuario();

	$documento 	= isset($_POST['documento']) ? $_POST['documento']:NULL;
	$nombre 	= isset($_POST['nombre']) 	? $_POST['nombre']:NULL;
	$perfil 	= isset($_POST['perfil']) 	? $_POST['perfil']:NULL;
	$password 	= isset($_POST['password']) ? $_POST['password']:NULL;
	$email 		= isset($_POST['email']) ? $_POST['email']:NULL;
	$estado 	= isset($_POST['estado']) 	? $_POST['estado']:NULL;
	$passactu 	= isset($_POST['passactu']) ? $_POST['passactu']:NULL;
	$passnew 	= isset($_POST['passnew']) 	? $_POST['passnew']:NULL;
	$passnew2 	= isset($_POST['passnew2']) ? $_POST['passnew2']:NULL;
	$cambpass 	= isset($_POST['cambpass']) ? $_POST['cambpass']:NULL;
	$usuario  	= isset($_SESSION['idUsuario']) ? $_SESSION["idUsuario"]:NULL;
	$rutaservidor	=	'fotos';
	$rutatemporal	= 	isset($_FILES['foto']['tmp_name']) ? $_FILES['foto']['tmp_name']:NULL;
	$nombrearchivo	=   isset($_FILES['foto']['name']) ? $_FILES['foto']['name']:NULL;
	$rutadestino	=	$rutaservidor.'/'.$nombrearchivo;
	$extensionar	= 	end(explode(".", $nombrearchivo));	


	$pr 		= isset($_POST['pr']) ? $_POST['pr']:NULL;
	$actu 		= isset($_POST['actu']) ? $_POST['actu']:NULL;
	$valid = 0;



	$datper 	= $ins->selper();
	$datusu 	= $ins->selusu();
	$datusu1	= $ins->selusu1($usuario);

	if ($cambpass) {
		if (sha1($passactu)==$datusu1[0]['pass'] && $passnew==$passnew2 ) {
			$ins->updpass($usuario,sha1($passnew));
			$valid=1;
		}
	}

	//Actualizar
	if ($documento && $nombre && $perfil && $password && $estado && $actu)
	{
		$ins->updusu($documento, $nombre, $perfil, sha1($password), $estado);
	}
	
	//Insertar
	
	if ($documento && $nombre && $email && $password && $perfil && !$actu)
	{
		move_uploaded_file($rutatemporal,$rutadestino);
		$ins->insusu($documento, $nombre, $email, sha1($password), $rutadestino, $perfil);
	}
	
?>