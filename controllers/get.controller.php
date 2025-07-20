<?php
require_once "models/get.model.php";
class GetController{

    static public function getData($table, $select){

        $response = GetModel::getData($table, $select);
        $return = new GetController();
        $return -> fncResponse($response);


    }


    /* ================================================
       Las respuestas del controlador
    ==================================================*/

    public function fncResponse($response){

        if(!empty($response)){
            $json = array(

                'status' => 200,
                'total' => count($response),
                'result' => $response

                );


        }else{
            $json = array(

                'status' => 404,
                'result' => 'Not found'
                );            
        }




        
            echo json_encode($json, JSON_PRETTY_PRINT, http_response_code($json["status"]));        




    }






}