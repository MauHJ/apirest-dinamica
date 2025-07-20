<?php
class Connection{

    /* ================================================
    Informacion de la base de datos
    ==================================================*/

    static public function infoDatabase(){
        
        $infoDB = array(
            "database" => "database-1",
            "user" => "root",
            "pass" => "root"

        );
        return $infoDB;


    }

/* ================================================
   Conexion a la base de datos
==================================================*/

    static public function connect(){

        try{

            $link = new PDO(
                "mysql:host=localhost;dbname=".connection::infoDatabase()["database"],
                connection::infoDatabase()["user"],
                connection::infoDatabase()["pass"]
            );
            $link->exec("Set names utf8");
        }catch(PDOException $e){
            die("Error: ".$e->getMessage());



        }

        return $link;

    }



}