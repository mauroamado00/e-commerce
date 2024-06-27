<?php

 require_once __DIR__ . '/../modelo/usuario_modelo.php'

$function = $_GET['function'];


switch($function){

    case 'agregar';
    agregarusuario();
    break;
    case 'eliminar';
    eliminarusuario();
    break;
    case 'obtener';
    obtenerusuario();
    break;
    case 'modificar';
    modificarusuario();
    break;

}

    function agregarusuario(){

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];
    $resultado = (new Usuarios())->agregarusuario($nombre, $email, $contraseña);
    echo_json_encode($resultado);

    }

    function eliminarusuario() {
        $id = $_POST['id'];
        $resultado = (new Usuarios())->eliminarusuario($id);
        echo json_encode($resultado);
    }
    
    function obtenerusuario() {
        $id = $_GET['id'];
        $resultado = (new Usuarios())->obtenerusuario($id);
        echo json_encode($resultado);
    }
    
    function modificarusuario() {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $contraseña = $_POST['contraseña'];
        $resultado = (new Usuarios())->modificarusuario($id, $nombre, $email, $contraseña);
        echo json_encode($resultado);
    }


?>