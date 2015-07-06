<?php

include_once '../../ControllerAudit/ControllerBD.php';

class ControllerCliente extends ControllerBD{

    private $pdo = null;
    
    public function listCliente() {
        try {
            $this->pdo = $this->abrirBD();
            $query = $this->pdo->query("select *from cliente");
            return $query;
        } catch (Exception $ex) {
            echo $ex;
        }
    }
    
    public function countCliente(){
        try{
            $this->pdo = $this->abrirBD();
            $listaCliente = $this->listCliente();
            return count($listaCliente->fetchAll());
        } catch (PDOException $ex) {
            echo $ex;
        }
    }

}

?>