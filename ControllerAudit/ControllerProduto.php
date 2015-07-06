<?php

include_once '../../ControllerAudit/ControllerBD.php';

class ControllerProduto extends ControllerBD{

    private $pdo = null;
    
    public function listProduto() {
        try{
        $this->pdo = $this->abrirBD();
        $query = $this->pdo->query("select t1.id AS id_produto, t1.cod_ean13, t1.preco_min, t1.preco_max,
                                        t1.descricao AS descricao_produto, t2.*, t3.descricao AS descricao_categoria from produto t1
                                        inner join subcategoria t2 ON (t1.subcategoria_id = t2.id)
                                        inner join categoria t3 ON (t2.categoria_id = t3.id)");
        return $query;
        }catch(PDOException $ex){
            echo $ex;
        }
    }
    
    public function listProdutoCategoria($subcategoria){
        try{
            $query = $this->pdo->query();
        } catch (PDOException $ex) {
            echo $ex;
        }
    }

}
?>