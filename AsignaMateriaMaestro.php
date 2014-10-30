<?php
require_once('Materia.php');
require('db.php');
$mat=new Materia();
$mat->asignarMateriaMaestro($_GET['idm'],$_GET['idp']);
$mat->muestraMaterias($_GET['idp']);

?>