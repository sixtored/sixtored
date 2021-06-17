<?php
    include_once '../config/Database.php';
    include_once '../models/Consulta.php';
    include_once '../utils/Response.php';
    $res = new Response();
    if ($_SERVER['REQUEST_METHOD'] == 'GET'){
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET');
        header('Content-Type: application/json; charset=utf-8');
        $database = new DBClass();
        $db = $database->getConnection();
        $consulta = new Consulta($db);
        // Obtener el id
        $consulta->id = $_GET['id'];
        // Consultar el id
        $consulta->readOne();
        $lastErr = $consulta->getLastErrorTxt();
        if (empty($lastErr)){
            if (!empty($consulta->nombre)){
                $aConsulta = array(
                    "id" => (int)$consulta->id,
                    "nombre" => $consulta->codigo,
                    "email" => $consulta->email,
                    "asunto" => $consulta->asunto,
                    "mensaje" => $consulta->mensaje,
                    "created_at" => $consulta->created_at,
                    "modified_at" => $consulta->modified_at                
                );
                http_response_code(200);
                echo json_encode($res->getResponse('success', $aConsulta, 200, 'datos de la consulta'));
            }else{
                http_response_code(404);
                echo json_encode($res->getResponse('warning', null, 404, 'consulta no encontrada'));
            }
        }else{
            http_response_code(500);
            echo json_encode($res->getResponse('error', null, 500, $lastErr));
        }
    }else{
        //405 => method not allowed
        http_response_code(405);
        echo json_encode($res->getResponse('error', null, 405, 'método no permitido'));
    }
?>
