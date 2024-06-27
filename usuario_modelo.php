<?php

    require_once __DIR__ . '/../conexion/conexion.php';

class usuarios{


    public function agregarusuario($nombre, $email, $contraseña){


        $sql = "INSERT INTO usuarios(nombre,email,contraseña) VALUES ('$nombre','$email', $contraseña)";
        $connection = $connection();
        $respuesta = $connection->query($sql);
        $id_cliente = $connection->insert_id;

    }

    public function eliminarusuarios($id_cliente){

        $sql = "DELETE FROM usuarios where id='$id_cliente'";

        $connection = connection();
        $respuesta = $connection->query($sql);
        return $respuesta;


    }


    public function obtenerusuarios(){

        $connection = connection();
        $sql = 'SELECT * FROM usuarios';
        $resultado = $connection->query($sql);
        $user = $resultado->fetch_all(MSQLI_ASSOC);
        return $user;

    }


    public function modificarusuario($nombre, $email, $contraseña){

        $sql = "UPDATE `usuarios` SET `id_cliente`='$id_cliente',`nombre`='$nombre',`email`='$email',`contraseña`='$contraseña' WHERE `usuarios`. `id` = $id;";
        $connection = connection();
        $respuesta = $connection->query($sql);
        return $respuesta;

    }


}

    
?>