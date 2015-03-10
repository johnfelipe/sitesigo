<?php  
	/*
	 Este es el menu principal del Home al cual se podran agregar las opciones necesarias para el sistema
	*/
    $perusu = isset($_SESSION["perfil"]) ? $_SESSION["perfil"]:NULL;
?>
<div class="col-sm-3 col-md-2 sidebar">
  <ul class="nav nav-sidebar">
    <li class="active"><a href="home.php">INICIO</a></li>
    <li><a href="vejes">EJES</a></li>
    <li><a href="home.php?var=350">REPORTES SEGUIMIENTO</a></li>
    <?php
        if ($perusu==1) 
        {
    ?>
    <li><a href="vselusu">USUARIOS</a></li>
    <?php              
        }  
    ?>
    <!--
    <li><a href="home.php?var=1">Sector Salud</a></li>
    <li><a href="#">Sector Educación</a></li>
    <li><a href="#">Sector Bienestar Social</a></li>
    <li><a href="">Sector Vivienda</a></li>
    <li><a href="">Sector Cultura</a></li>
    <li><a href="">Sector Deporte</a></li>
    <li><a href="home.php?var=271">Vigencia 2012</a></li>
        -->
  </ul>
</div>