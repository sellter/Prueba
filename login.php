<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Theme Template for Bootstrap</title>

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
            <a class="navbar-brand" href="#">Bootstrap theme</a>
        </div>
    </div>
</div>

<div class="container theme-showcase" role="main">
<?php

/**
 * Created by PhpStorm.
 * User: BerEduardo
 * Date: 2/10/14
 * Time: 06:21 PM
 */

echo"
<div class='container'>

      <form class='form-signin' role='form' action='system.php' method='post'>
        <h2 class='form-signin-heading'>Please sign in</h2>
        <input type='text' id='usr' name=usr class='form-control' placeholder='usuario' required autofocus>
        <input type='password' id='psw' name=psw class='form-control' placeholder='Password' required>
        <label class='checkbox'>
</label>
        <button class='btn btn-lg btn-primary btn-block' type='submit'>Inicia</button>
      </form>";
if(isset($_REQUEST['mensaje'])){
    switch($_REQUEST['mensaje']){
        case "no":
            echo"<div class='alert alert-danger' role='alert'>
        <strong>TU!</strong> usuario no existe
      </div>";
            break;
        case "activo":

            echo"<div class='alert alert-warning' role='alert'>
        <strong>Warning!</strong> Tu usuario no está activo consulta al admin.
      </div>";
            break;

    }
}
echo"

    </div>

    ";
include('footer.php');

?>