<?php

requiere once __DIR__ . '/../modelo/productos_modelo.php'

$function = $_GET['function'];


switch($function){

    case 'agregar';
    agregarproductos();
    break;
    case 'eliminar';
    eliminarproductos();
    break;
    case 'obtener';
    obtenerproductos();
    break;
    case 'modificar';
    modificarproductos();
    break;

}

    function agregarproductos(){

        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $cantidad_stock = $_POST['cantidad_stock'];
        $resultado = (new Productos())->agregarproductos($nombre, $descripcion, $precio, $cantidad_stock);
        echo_json_encode($resultado);

    }

    function eliminarproductos() {
        
        $id = $_POST['id'];
        $resultado = (new Productos())->eliminarproductos($id);
        echo json_encode($resultado);
    }
    
    function obtenerproductos() {

        $id = $_GET['id'];
        $resultado = (new Productos())->obtenerproductos($id);
        echo json_encode($resultado);

    }
    
    function modificarproductos() {

        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $cantidad_stock = $_POST['cantidad_stock'];
        $resultado = (new Productos())->agregarproductos($nombre, $descripcion, $precio, $cantidad_stock);
        echo json_encode($resultado);
    }


?>