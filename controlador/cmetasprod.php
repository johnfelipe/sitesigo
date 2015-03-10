<?php

	require 'modelo/mmetasprod.php';

	$ins = new Mmetasprod();

	$idsector = isset($_GET['id']) ? $_GET['id']:NULL;

	$programas = $ins->seleccionar_programa_sector($idsector);
	$sector =    $ins->seleccionar_sector($idsector);