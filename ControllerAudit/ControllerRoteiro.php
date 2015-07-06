<?php

include_once '../../ControllerAudit/ControllerBD.php';

class ControllerRoteiro extends ControllerBD{

    private $pdo;

    public function listRoteiro() {
        try{
        $this->pdo = $this->abrirBD();
        $query = $this->pdo->query("select *from roteiro_cliente t1
                                        inner join roteiro t2 ON (t2.id = t1.roteiro_id)
                                        inner join cliente t3 ON (t3.id = t1.cliente_id)");
        return $query;
        }catch(PDOException $ex){
            echo $ex;            
        }
    }

};
?>