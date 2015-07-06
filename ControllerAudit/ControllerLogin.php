<?php
include_once '../../ControllerAudit/ControllerBD.php';
class ControllerLogin extends ControllerBD{

    private $login, $senha;
    private $pdo;

    public function verificaLogin($login, $senha) {
        try {
            $usuario = $this->buscaLoginUsuario($login);
            if (!empty($usuario)) {
                if ($usuario['login'] == $login && $usuario["senha"] == $senha) {
                    $this->autenticacao($usuario['login']);
                    return True;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } catch (Execption $ex) {
            echo $ex;
        }
    }

    private function buscaLoginUsuario($login) {
        try {
            $this->pdo = $this->abrirBD();
            $query =  $this->pdo->query("select *from usuario where login = '$login'")->fetch(PDO::FETCH_ASSOC);
            return $query;
        } catch (Execption $ex) {
            echo $ex;
        }
    }

    private function autenticacao($login) {
        try{
        session_start();
        $_SESSION['status'] = true;
        $_SESSION['login'] = $login;
        }catch(Exception $ex){
            echo $ex;
        }
    }

};
?>