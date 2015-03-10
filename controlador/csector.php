<?php

	require 'modelo/msector.php';

	$ins = new Msector();

	$ideje = isset($_GET['id']) ? $_GET['id']:NULL;

	$sectores = $ins->seleccionar_sector_eje($ideje);
	$eje = $ins->seleccionar_eje($ideje);