<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Escuela</title>

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

<div class="container theme-showcase" role="main">
<?php

echo"
<div class='container'>

      <form class='form-signin' role='form' action='system.php' method='post'>
        <table>
        <tr><td><h2 class='form-signin-heading'>Logueo</h2></td></tr>
        <tr><td><input type='text' id='usr' name=usr class='form-control' placeholder='Usuario' required autofocus></td></tr>
        <tr><td><input type='password' id='psw' name=psw class='form-control' placeholder='Password' required></td></tr>
        <label class='checkbox'>
</label>
        <tr><td><button type='submit'>Ingresa</button></td></tr>
        </table>
      </form>";
if(isset($_REQUEST['mensaje'])){
    switch($_REQUEST['mensaje']){
        case "no":
            echo"
        Tu usuario no existe
      ";
            break;
        case "activo":

            echo"
         Tu usuario no está activo consulta al admin.
      ";
            break;

    }
}
echo"

    </div>

    ";
include('footer.php');

?>