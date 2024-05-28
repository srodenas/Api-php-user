<?php

/*
función que devuelve la respuesta al cliente en:
1.- respuesta en formato json
2.- establece el estado de la respuesta con code
3.- codificamos $response como array asociativo en json.
4.- Detiene la ejecución del script después de mandarlo.
*/
class Response{



    public static function result($code, $response){
        header('Content-type: application/json');
        http_response_code($code);
        echo json_encode($response);
        exit;
    }



    public static function prepared_result($result, $detail){
        $response = array(
            'result' => $result,
            'detail' => $detail
        );
        return $response;
    }

    public static function prepared_result_token($result, $token){
        $response = array(
            'result' => $result,
            'token' => $token
        );
        return $response;
    }

    public static function prepared_result_insert($result, $id){
        $response = array(
            'result' => $result,
            'insert_id' => $id
        );
        return $response;
    }




    public static function build_token($id, $email){
        $data_token = array(
            'iat' => time(),
            'data' => array(
                'id' => $id,
                'email' => $email
            )
        );
        return $data_token;
    }
}
?>