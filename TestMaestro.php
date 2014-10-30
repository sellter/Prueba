<?php
require("header.php");

require_once("db.php");
require('Maestro.php');

$ma=new Maestro();
$ma->reporecomb();

require("footer.php");
?>