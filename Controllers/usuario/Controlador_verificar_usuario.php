<?php

require_once '../../Models/UsuarioModel.php';
$post = $_POST;
$usuario = new Usuario();
$usua = utf8_decode($post['user']);
$contra = utf8_decode($post['pass']);
$consulta = $usuario->verificarUsuario($post);
$data = json_encode($consulta);
if (count($consulta) > 0) {
    echo $data;
} else {
    echo 0;
}
?>

