<?php
require_once '../models/user.php';
require_once '../models/authModel.php';

$auth = new Auth();
$auth->verify_autentication_by_token(); //verificamos si está logueado
$user = new User();  //Creamos un objeto User 


switch ($_SERVER['REQUEST_METHOD']){

    case 'GET':

        $params = $_GET; //obtenemos los parámetros pasados por get.
       // echo "Entramos a devolver todos los alumnos"; exit;
        $user->get_users($params);
        break;

    case 'POST':
        /*
        No lo utilizaremos, ya que no incluímos al Admin.
        */
        break;

    case 'PUT':

        /*
        No lo utilizaremos, ya que no incluímos al Admin.
        */
        break;

    case 'DELETE':
        /*
        No lo utilizaremos, ya que no incluímos al Admin.
        */
        break;

}


?>