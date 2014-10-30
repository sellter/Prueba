<?php

$psw=$_REQUEST['psw'];
$usr=$_REQUEST['usr'];
if($psw=='' or $usr==''){
    echo"<br><br>
        <div class='alert alert-warning' role='alert'>
        <strong>Oh no!</strong> Debes llenar todos los campos.
      </div>
    ";

}else{
require_once('db.php');

$sql="  SELECT * FROM usuario WHERE pws='$psw' AND usuario='$usr'";

$exe=mysql_query($sql)or die(mysql_error());
$num=mysql_num_rows($exe);
if($num>0){
    $id=mysql_result($exe,0,'id');
    echo"<br><br>

        <div class='alert alert-success' role='alert'>
        <strong>Muy bien!</strong> en 1 segundo serás redireccionado.
      </div>
    ";
   echo" <meta content='1;URL=index.php?ids=$id' http-equiv='REFRESH'> </meta>";

}else{
    echo"<br><br>
        <div class='alert alert-danger' role='alert'>
        <strong>Oh no!</strong> No dijiste las palabras mágicas.
      </div>
    ";
}


}
?>