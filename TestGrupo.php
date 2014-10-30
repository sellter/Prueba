<?php
require_once('header.php');
require_once('db.php');
include('Grupo.php');
$grp= new Grupo();
$grp->actualizarGrupo();
$grp->altaGrupo();
$grp->eliminarGrupo();
$grp->reporteG1();
$grp->reporteG2();
$grp->aignarMaterias();
$grp->asignarGrupo();



require_once('footer.php');
?>