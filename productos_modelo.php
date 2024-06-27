<?php

    require_once __DIR__ . '/../conexion/conexion.php';

class usuarios{


    public function agregarproductos($nombre, $email, $contraseña){


        $sql = "INSERT INTO productos(nombre,email,contraseña) VALUES ('$nombre','$email', $contraseña)";
        $connection = $connection();
        $respuesta = $connection->query($sql);
        $id_producto = $connection->insert_id;

    }

    public function eliminarproductos($id_producto){

        $sql = "DELETE FROM productos where id='$id_producto'";

        $connection = connection();
        $respuesta = $connection->query($sql);
        return $respuesta;


    }


    public function obtenerproductos(){

        $connection = connection();
        $sql = 'SELECT * FROM productos';
        $resultado = $connection->query($sql);
        $user = $resultado->fetch_all(MSQLI_ASSOC);
        return $user;

    }


    public function modificarproductos($nombre, $email, $contraseña){

        $sql = "UPDATE `productos` SET `id_cliente`='$id_productos',`nombre`='$nombre',`email`='$email',`contraseña`='$contraseña' WHERE `usuarios`. `id` = $id;";
        $connection = connection();
        $respuesta = $connection->query($sql);
        return $respuesta;

    }

}


?>