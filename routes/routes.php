<?php


$routesArray = explode("/", ($_SERVER['REQUEST_URI']));
$routesArray = array_filter($routesArray);
//echo '<pre>'; print_r($routesArray); echo '</pre>';


//Cuando no se hace ninguna peticion a la API se ejcuta la siguiente condicion

if(count($routesArray) == 0){


        $json = array(
            'status' => 400,
            'result' => 'Not found'
                    );

    echo json_encode($json, JSON_PRETTY_PRINT, http_response_code($json["status"]));   
    return ; 
}


/* Cuando si se hace una peticion a la api  */
if(count($routesArray) == 1 && isset($_SERVER['REQUEST_METHOD'])){

    /* Periticiones GET */

    if($_SERVER['REQUEST_METHOD'] == "GET"){

        include "routes/services/get.php";
        
    }
    /*Peticion POST */
        if($_SERVER['REQUEST_METHOD'] == "POST"){
        $json = array(
            'status' => 200,
            'result' => 'Solicitud POST'
                    );
        echo json_encode($json, JSON_PRETTY_PRINT, http_response_code($json["status"]));                       
    }
    /*Peticion PUT */
        if($_SERVER['REQUEST_METHOD'] == "PUT"){
        $json = array(
            'status' => 200,
            'result' => 'Solicitud PUT'
                    );
        echo json_encode($json, JSON_PRETTY_PRINT, http_response_code($json["status"]));                       
    }    
    /*Peticion DELETE */
        if($_SERVER['REQUEST_METHOD'] == "DELETE"){
        $json = array(
            'status' => 200,
            'result' => 'Solicitud DELETE'
                    );
        echo json_encode($json, JSON_PRETTY_PRINT, http_response_code($json["status"]));                       
    }    
    

}

?>
