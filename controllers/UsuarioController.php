<?php

require_once 'models/usuario.php';

class usuarioController {

    public function index() {
        echo "Controlador Usuario, accion index";
    }

    public function registro() {
        require_once 'views/usuario/registro.php';
    }

    public function save() {
        if (isset($_POST)) {
            $usuario = new Usuario();
            $usuario->setCedula($_POST['cedula']);
            $save->$usuario->save();
            if ($save) {
                $_SESSION['register'] = "completado";
            } else {
                $_SESSION['register'] = "failed";
            }
            var_dump($usuario);
        } else {
            $_SESSION['register'] = "failed";
            header("Location:" . base_url . 'usuario/register');
        }
        header("Location:" . base_url . 'usuario/register');
    }

}

?>