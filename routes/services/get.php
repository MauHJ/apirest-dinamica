<?php
require_once "controllers/get.controller.php";
$table = explode("?", $routesArray[1])[0];
$select = $_GET["select"] ?? "*";
$response =  new GetController();
$orderBy = $_GET["orderBy"] ?? Null;
$orderMode = $_GET["orderMode"] ?? Null;
$startAt = $_GET["startAt"] ?? Null;
$endAt = $_GET["endAt"] ?? Null;
    /* ================================================
    Peticion GET con filtro 
    ==================================================*/

if(isset($_GET["linkTo"]) && isset($_GET["equalTo"])){

    $response -> getDataFilter($table, $select,$_GET["linkTo"],$_GET["equalTo"], $orderBy, $orderMode, $startAt, $endAt);


}else{

    /* ================================================
       Peticion GET sin filtro
    ==================================================*/

    $response -> getData($table, $select, $orderBy, $orderMode, $startAt, $endAt);

}








return;
