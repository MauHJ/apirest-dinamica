<?php

require "connection.php";

class GetModel{

    /* ================================================
       Peticion GET sin filtro
    ==================================================*/


    static public function getData($table, $select){

        $sql = "SELECT $select FROM `$table`";
        $stmt = Connection::connect()->prepare($sql);
        $stmt -> execute();
        return $stmt -> fetchAll(PDO::FETCH_CLASS);

    }
    /* ================================================
       Peticion GET con filtro
    ==================================================*/


    static public function getDataFilter($table, $select, $linkTo, $equalTo){
        
        
        $linkToArray = explode(",",$linkTo);
        echo '<pre>'; print_r($linkToArray); echo '</pre>';

        
        $equalToArray = explode("_",$equalTo);
        echo '<pre>'; print_r($equalToArray); echo '</pre>';

        return;

        $sql = "SELECT $select FROM $table WHERE $linkTo = :$linkTo AND ";
        $stmt = Connection::connect()->prepare($sql);
        $stmt -> bindParam(":".$linkTo, $equalTo, PDO::PARAM_STR);
        $stmt -> execute();
        return $stmt -> fetchAll(PDO::FETCH_CLASS);






    }    

}