<?php
function decode_get($string)
{
	$cad=explode("?",$string);
	$string=$cad[1];
	
	$string=base64_decode($string);
	$control="optica";
	$string=str_replace($control,"","$string");
return ($string);
	}
?>
<?php
$idu=decode_get($_SERVER["REQUEST_URI"]);
if ($idu=="")
	{
	$msg="";
	print "<meta http-equiv='refresh' content='0;
	url=index.php?msg=$msg'>";
	}
	else
	{
	SetCookie ('idu', $idu);
	SetCookie ('acceso', 1);
	session_start();
	$_SESSION['idu']=$idu;
	$_SESSION['acceso']=1;
	
	print "<meta http-equiv='refresh' content='0;
	url=index2.php'>";
	exit;
	}
?>