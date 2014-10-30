<?php
function encode_this($string){
UTF8_encode($string);
$control='optica';
$string=$control.$string.$control;
$string=base64_encode($string);
return($string);
}
?>
<?php
$user=$_POST['usr'];
$psw=$_POST['psw'];

if ($user=="" or $psw=="")
{
$msg="Los campos deben ir llenos";
print "<meta http-equiv='refresh' content='0;
	url=sys.php?msg=$msg'>";
	exit;
	}

include('db.php');
$sql="select * from usuario where usuario='$user' and pws='$psw'";
$consulta=mysql_query ($sql) or die (mysql_error());
$cuantos=mysql_num_rows($consulta);
	if ($cuantos==0)
	{
		$msg="El usuario o password no son correctos";
		print "<meta http-equiv='refresh' content='0;
		url=index.php?mensaje=no'>";
		exit;
		}
	else 
	{
	$idu=mysql_result($consulta, 0, 'id');
	$activo=mysql_result($consulta, 0, 'estatus');
	if($activo=='si'){
	$sql1="Select * from usuario where id=$idu";
$consulta1=mysql_query($sql1) or die (mysql_error());
$nombre=mysql_result($consulta1, 0, 'nombre');
$usuario=mysql_result($consulta1,0,'usuario');

	}
	if ($activo!=1)
	{
	$msg='El usuario no esta activo, consulta a su administrador';
	print "<meta http-equiv='refresh' content='0;
		url=index.php?mensaje=activo'>";
	exit;
	}
	else
	{
	$idu=encode_this($idu);
	print "<meta http-equiv='refresh' content='0;
		url=accesos.php?$idu'>";
	}
	}
	?>