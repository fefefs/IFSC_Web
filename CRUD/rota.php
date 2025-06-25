<?php
include_once  __DIR__. './modelo/Conexao.php';
include_once  __DIR__. './modelo/Usuario.php';
include_once  __DIR__. './modelo/UsuarioDAO.php';
include_once  __DIR__. './controlador/AutController.php';



if(isset($_GET['rota'])){
    $rota=$_GET['rota'];
} else {
    $rota= "login";
}

switch($rota){
    case 'login':
        //header("Location:login.php");
        require "login.php";
        break;
    case 'autenticacao':
        $auth=new AutController();
        $auth->login();
        break;
    case 'autenticacao':
        require "home.php";
        break;
    default:
        echo "Rota desconhecida";
}

?>