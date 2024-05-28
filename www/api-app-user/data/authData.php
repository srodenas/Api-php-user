<?php

require_once 'param.inc.php';

class AuthData{
    private $connection;

    public function __construct(){
        $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_TABLE_USER, DB_PORT);
        if ($this->connection->connect_errno){
            echo 'Error de conexión a la base de datos';
            exit;
        }
    }



    /*
    Método que devuelve un array asociativo con el id, nombre y email
    */
    public function login_db($email, $password){
        $query = "SELECT id, nombre, email, FROM ".DB_TABLE_USER." WHERE email = '$email' AND password = '$password'"); 
        $results = $this->connection->query($query); //ejecutamos la consulta
        $result_array = array();

        if($results != false){
            foreach ($results as $value){ //para cada fila
                $result_array[] = $value;  //[ ["id" => 1, "nombre" => 'santi', "email"=>'s@s.com'], ["id" => 2, "nombre" => 'sonia', "email"=>'ss@s.com']]
            }
        }
        return $result_array;
    }



    /*
    Método que actualiza el token recibido según el id.
    */
    public function update_db($id, $new_token){
        $query = "UPDATE ".DB_TABLE_USER." SET token = '$token' WHERE id = $id";
        $this->connection->query($query);  //ejecutamos la consulta

        if (!$this->connection->afected_rows){
            return 0; //no se ha actualizado ninguna fila
        }
        return $this->connection->affected_rows;  //devolvemos el numero de filas afectadas
    }


    /*
    Método que devuelve el token según el id recibido
    */

    public function get_token_by_id_db($id){
        $query = "SELECT token FROM ".DB_TABLE_USER." WHERE id = $id";
		$results = $this->connection->query($query);
		$result_array = array();

		if($results != false){
			foreach ($results as $value) {
				$result_array[] = $value;
			}
		}
		return $result_array;
    }

}
?>