
<?php
if ($idu=="")
	{
	$smg="";
	print "<meta http-equiv='refresh' content='0;
	url=sys.php?msg.php?msg=$msg'>";
	}
	else
	{
	SetCookie ('idu', $idu);
	SetCookie ('acceso', 1);
	session_start();
	$_SESSION['idu']=$idu;
	$_SESSION['acceso']=1;
	
	print "<meta http-equiv='refresh' content='0;
	url=scrhmas/index.html'>";
	exit;
	}
?>