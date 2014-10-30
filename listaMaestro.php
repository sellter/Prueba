<?php
include_once('Materia.php');
include('db.php');
$mat=new Materia();
$mat->muestraMaterias($_GET['maestro']);
?>