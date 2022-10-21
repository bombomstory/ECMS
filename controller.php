<?php
$do=empty($_GET["do"])?"home":$_GET["do"];
$controller=$do.".php";
require_once($controller);
?>