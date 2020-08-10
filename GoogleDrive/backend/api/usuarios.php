<?php
    header("Content-Type: application/json");
    include_once("../class/class-usuario.php");
    $_POST = json_decode(file_get_contents('php://input'),true);
    switch($_SERVER['REQUEST_METHOD']){
        case 'POST':
            //Guardar
            $usuario = new Usuario(
                $_POST['nombre'],
                $_POST['apellido'],
                $_POST['correo'],
                sha1($_POST['contrasena'])
            );
            $nuevoUsuario = $usuario->guardarUsuario();
            if ($nuevoUsuario){
                $resultado = array(
                    "codigoResultado" => 1,
                    "mensaje"=> "Usuario creado",
                );
                echo json_encode($resultado);
            }else{
                echo '{"codigoResultado":0, "mensaje":"Ya existe un usuario con ese correo"}';
            }
        break;
        case 'GET':
            if (isset($_GET['correo'])){
                if (Usuario::obtenerUsuario($_GET['correo']))
                    echo '{"codigoResultado": 1, "mensaje":"Usuario autenticado"}';
                else
                    echo '{"codigoResultado": 0, "mensaje":"No pudimos encontrar tu cuenta de google"}';
            }else{
                //Usuario::obtenerUsuarios();
            }
        break;
        case 'PUT':
            //actualizar
        break;
        case 'DELETE':
            //Eliminar
        break;
    }    
?>  