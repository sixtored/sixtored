<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: application/json; charset=utf-8");
    require '../config/Database.php';
    require '../models/Conulta.php';
    require '../utils/Response.php';
    $res = new Response();
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Obtener la data
        $data = json_decode(file_get_contents("php://input"));
        // Validar la data
        if (!empty($data->id) && !empty($data->nombre)){
            $database = new DBClass();
            $consulta = new Consulta($database->getConnection());

            $consulta->id = $data->id;
            $consulta->codigo = $data->nombre;
            $consulta->email = $data->email;
            $consulta->asunto = $data->asunto;
            $consulta->mensaje = $data->mensaje;

            $consulta->update();
            $lasterror = $consulta->getLastErrorTxt();

            if (empty($lasterror)){
                http_response_code(200);
                echo json_encode($res->getResponse("success", $categoria, 200, "consulta actualizada"));
            }else{
                http_response_code(500);
                echo json_encode($res->getResponse("error", null, 500, $lasterror));
            }
        }else{
            http_response_code(400); // bad request
            echo json_encode($res->getResponse("warning", null, 400, "datos incompletos"));
        }
    }else{
        http_response_code(405); // Method not allowed
        echo json_encode($res->getResponse("warning", null, 405, "método no permitido"));

    }
?>
