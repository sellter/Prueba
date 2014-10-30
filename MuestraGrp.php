<?php
require_once('db.php');
include('Grupo.php');
$grp=new Grupo();
$grp->reporteG2($_GET['Grupos']);
?>