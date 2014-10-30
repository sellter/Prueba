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
    <script>
        function cargar(div,div2)
        {
            var mat    =  document.getElementById('maestro').value;
            var url="materias.php?maestro="+mat;
            var url2="listaMaestro.php?maestro="+mat;
            $(div2).load(url2);
            $(div).load(url);
        }
        function cargar1(div2,div,mat1){
            var mat    =  document.getElementById('maestro').value;
            var url2="EliminaMateria.php?idm="+mat1+"&idp="+mat;
            $(div2).load(url2);
            var url="materias.php?maestro="+mat;

            $(div).load(url);

        }
        function asigna(div2,div){
            var prof    =  document.getElementById('maestro').value;
            var mat    =  document.getElementById('materia').value;
            if(mat==0){
                alert("Debes seleccionar una materia")
            }else{

                var url="materias.php?maestro="+prof;
                $(div).load(url);
                var url2="AsignaMateriaMaestro.php?idm="+mat+"&idp="+prof;
                var maestro    =  document.getElementById('maestro').value;
               $(div2).load(url2);

            }
        }

    </script>
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
 * User: MAQ8-LAB2-TIC
 * Date: 12/09/14
 * Time: 06:24 PM
 */

require("header.php");

include("db.php");
require('Maestro.php');
require('Materia.php');
echo"<h1>Asigna materias</h1>";
$ma=new Maestro();
$mat=new Materia();
echo"<div class=table-responsive>";
echo"<table class=\"table table-striped\">";
echo"<tr><td colspan=5 align=Center><strong>Asigna materias</strong> </td></tr>";

echo"<tr><td>Selecciona Maestro</td><td>";$ma->reporecomb();echo"</td><td>Selecciona materia</td><td><div id='divtest'>";$mat->reportec1(); echo"</div></td><td><button type='button' class='btn btn-lg btn-primary' onclick=\"asigna('#divtabla','#divtest')\";>Asigna</button></td></tr>";




echo"</table></div>";
echo"<div id='divtabla'></div>";
include("footer.php");

?>
