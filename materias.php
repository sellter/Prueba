<?php
include('Materia.php');
require_once('db.php');

echo $_GET['maestro'];
$cm=new Materia();
$cm->comboMateriaMaestro($_GET['maestro']);

?>