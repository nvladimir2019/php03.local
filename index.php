<?php
define("DOCROOT",$_SERVER["DOCUMENT_ROOT"."/"]);

include DOCROOT."common/kernel.php";

$url = explode("?",$_SERVER["REQUEST_URI"])[0];
$url = trim($url,"/");

$pathComponents = explode("/",$url);

$controller= empty($pathComponents[0])?"main":$pathComponents[0];
$action = empty($pathComponents[1])?"index":$pathComponents[1];

navigate($controller,$action);






