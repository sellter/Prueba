<?php

require_once('Materia.php');
require('db.php');
$mat=new Materia();
$mat->desvinculaMateria($_GET['idm'],$_GET['idp']);
$mat->muestraMaterias($_GET['idp']);
?>