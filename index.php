<?php


//Mostrar errores


ini_set('Display_errors',1);
ini_set("log_errors",1);
ini_set("error_log","C:\laragon\www\apirest-dinamica/php_error_log");



require_once "controller/routes.controller.php";

$index = new RoutesController();
$index -> index();
