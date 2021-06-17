<?php
    require '../config/Database.php';
    require '../models/Consulta.php';
    require '../utils/Response.php';
    //
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: DELETE");
    header("Content-Type: application/json;charset=utf-8");

    $res = new Response();
    if ($_SERVER['REQUEST_METHOD'] == 'DELETE'){
        $database = new DBClass();
        $consulta = new Consulta($database->getConnection());

        $data = json_decode(file_get_contents("php://input"));
        if (!empty($data->id)){
            
            $consulta->id = $data->id;

            if ($consulta->delete()){
                http_response_code(200);
                echo json_encode($res->getResponse("success", null, 200, "consulta eliminada"));
            }else{
                http_response_code(500);
                echo json_encode($res->getResponse("error", null, 500, $consulta->getLastErrorTxt()));
            }
        }else{
            http_response_code(400);
            echo json_encode($res->getResponse("warning", null, 400, "datos incompletos"));
        }
    }else{
        http_response_code(405);
        echo json_encode($res->getResponse("warning", null, 405, "método no permitido"));
    }
?>
