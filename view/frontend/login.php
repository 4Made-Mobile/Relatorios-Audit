<?php
if (!empty($_POST)) {

    include_once "../../Fachada/Fachada.php";
    
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    //Instanciando Objeto
    $fachada = new Fachada();
    $res = $fachada->verificaLogin($login, $senha);
    
    if ($res == True) {
        header("Location: ../admin/");
    } else {
        header("Location: index.php");
    }
} else {
    header("Location: index.php");
}
?>