<?php
include_once('../config/Conexion.php');
$cnx = new Conexion();
$cadena = $cnx->abrirConexion();

if (isset($_POST['actualizarDataUsu'])) {

    $secuence = $_POST['secuence'];
    $iduser = $_POST['iduser'];
    $nomuser = $_POST['nomuser'];
    $apellido = $_POST['usuario_apellido'];
    $cargo = $_POST['usuario_cargo'];
    $id = $_POST['username'];
    $pass = $_POST['pass'];
    $email = $_POST['usuario_email'];
    $telefono = $_POST['usuario_telefono'];
    $estado = $_POST['user_estado'];

    $query = "UPDATE `usuario` 
                SET `id_usuario`='$iduser',`nom_usuario`='$nomuser',`ape_usuario`='$apellido',`id_tipo_usuario`='$cargo',`cod_usuario`='$id',
                    `pass_usuario`='$pass',`mail_usuario`='$email',`tlf_usuario`='$telefono',`estado_usuario`='$estado'
                WHERE `usuario`.`secuence_usu` = '$secuence'";

    $query_run = mysqli_query($cadena, $query);

    if ($query_run) {
        echo '<script> alert("Usuario Actualizado");</script>';
        header("Location:../Vista/Categoria/listaUsuario.php");
    } else {

        echo '<script> alert("Error al actualizar");</script>';
    }
}
