<?php
$db_name="apli";
$db_user="root";
$db_host="localhost";
$db_pass="";
$db_connection= mysql_connect($db_host,$db_user,$db_pass ) or die("error BD");
mysql_select_db($db_name,$db_connection);
mysql_query("SET NAMES  utf8");
?>