<?php
require '../conexao2.php';

if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])) {
    require_once 'Usuario.class.php';
    $u = new Usuario();

    $listLogged = $u->logged($_SESSION['idUser']);

    $emailUser = $listLogged['email'];
} else {
    header("Location: cadastro.php");
}
?>