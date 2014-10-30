<?php
include_once('db.php');
$idu=$_COOKIE['idu'];/* SE RECIBE LA COOKIE QUE SE CREÓ EN EL INICIÓ DE SESIÓN*/
$query="select nivel from usuario where id=$idu";
$mysql_query=mysql_query($query) or die(mysql_error());
$level=mysql_result($mysql_query,0,'nivel');
$acceso=$_COOKIE['acceso'];/* SE RECIBE LA COOKIE QUE SE CREÓ EN EL INICIÓ DE SESIÓN*/
if($idu=="" or $acceso=="")
{			/*SI ALGUNA DE LAS DOS ESTÁ VACÍA REDIRECCIÓNA A LA PÁGINA DE LOGIN*/
    print "<meta http-equiv='refresh' content='0;url=login.php'>";
    exit;
}
Session_start();
$idu2=$_SESSION['idu'];/* SE RECIBE LA SESIÓN QUE SE CREÓ EN EL INICIÓ DE SESIÓN*/
$acceso2=$_SESSION['acceso'];/* SE RECIBE LA SESIÓN QUE SE CREÓ EN EL INICIÓ DE SESIÓN*/
if($idu2=="" or $acceso2=="")
{	/*SI ALGUNA DE LAS DOS ESTÁ VACÍA REDIRECCIÓNA A LA PÁGINA DE LOGIN*/
    print "<meta http-equiv='refresh' content='0;url=login.php'>";
    exit;
}
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>UTVT</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap/css/theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="bootstrap/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body role="document">

<!-- Fixed navbar -->

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">UTVT</a>
        </div>
    </div>
</div>
<?php

switch($level){
    case 1:
        include('menu.php');
        break;
    case 2:
        include('menu-teacher.php');
        break;
}

?>


<div class="container theme-showcase" role="main">