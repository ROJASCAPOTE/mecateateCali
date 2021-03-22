<?php

require_once 'models/usuario.php';

class usuarioController {

    public function index() {
        require_once "views/usuario/lista-usuarios.php";
    }

    public function registro() {
        require_once 'views/usuario/registro.php';
    }

    public function save() {
        if (isset($_POST)) {
            $usuario = new Usuario();
            $usuario->setCedula($_POST['cedula']);
            $usuario->setPrimerNombre($_POST['primernombre']);
            $usuario->setSegundoNombre($_POST['segundonombre']);
            $usuario->setPrimerApellido($_POST['primerapellido']);
            $usuario->setSegundoApellido($_POST['segundoapellido']);
            $usuario->setTelefono($_POST['telefono']);
            $usuario->setCelular($_POST['celular']);
            $usuario->setEmail($_POST['correo']);
            $usuario->setSexo($_POST['sexo']);
            $usuario->setFechaNacimiento($_POST['fechanacimiento']);
            $usuario->setDepartamentos($_POST['departamento']);
            $usuario->setMunicipios($_POST['municipio']);
            $usuario->setDireccion($_POST['direccion']);
            $usuario->setBarrio($_POST['barrio']);
            $usuario->setLogin($_POST['login']);
            $usuario->setPassword($_POST['contrasena']);
            $usuario->setFechaIngreso($_POST['fechaingreso']);
            $save = $usuario->save();
            if ($save) {
                $_SESSION['register'] = "completado";
            } else {
                $_SESSION['register'] = "failed";
            }
           
        } else {
            $_SESSION['register'] = "failed";
            header("Location:" . base_url . 'usuario/registro');
        }
        header("Location:" . base_url . 'usuario/registro');
    }

    public function login() {
        if (isset($_POST)) {
            //Identificar el usuario
            //Consulta a la base de datos
            //Crear un sesion
        }
        header("Location:" . base_url);
    }

}

?>