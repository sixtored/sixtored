<?php
    // crear un registro en la tabla categoria (POST) body->raw->json
    // Declaraciones de librerias
    require '../config/Database.php';
    require '../models/consulta.php';
    require '../utils/Response.php';

    // CREATE TABLE categorias (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, codigo VARCHAR(10) NOT NULL, descripcion VARCHAR(60) NOT NULL,  // create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, modified_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, 
    // deleted_at TIMESTAMP NULL) ENGINE=INNODB, CHARSET = utf8
    
    $res = new Response();

    // Evaluar el método
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: POST");
        header("Content-Type: application/json, charset=utf-8");
        // obtener el body (cuerpo) de la petición.
        // file_get_contents("php://input") => obtiene el cuerpo de la petición            
        $data = json_decode(file_get_contents("php://input"));
        // Operadores logicos VFP / PHP
        // VFP  |   php
        // AND  |   &&
        // OR   |   ||

        if (!empty($data->nombre) && !empty($data->email)){
            $database = new DBClass();
            $dbh = $database->getConnection();
            $consulta = new Consulta($dbh);
            
            // Pregunta si ya existe la tabla consultas..
           //if ($consulta->ifexisttable()) {

            // llenar los atributos de categoria
            $consulta->nombre = $data->nombre;
            $consulta->email = $data->email;
            $consulta->asunto = $data->asunto ;
            $consulta->mensaje = $data->mensaje ;

            $consulta->create();
            $resp = $consulta->getLastErrorTxt(); // Si todo esta OK entonces queda vacío.
            if (empty($resp)){ // OK
                http_response_code(201); // created
                echo json_encode($res->getResponse("success", $consulta, 201, "consulta creada"));
            }else{ // Hubo un Error
                http_response_code(500); // internal server error
                echo json_encode($res->getResponse("error", null, 500, $resp));
            }

          //  } // si se creo la tabla consultas..

        }else{
            http_response_code(400); //Bad request
            echo json_ecnode($res->getResponse("warning", null, 400, "datos incompletos"));
        }
    }else{
        http_response_code(405);
        echo json_encode($res->getResponse("warning", null, 405, "método no permitido"));
    }
?>
