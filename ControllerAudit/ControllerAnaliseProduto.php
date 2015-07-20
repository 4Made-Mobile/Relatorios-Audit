<?php

class ControllerAnaliseProduto {

    private $pdo;

    public function abrirBD() {
        try {
            //$this->pdo = new PDO("mysql:host=ns132.hostgator.com.br;dbname=wfcre593_auditapi", "wfcre593_4maudit", "Kdsakm783");
            $this->pdo = new PDO("mysql:host=localhost;dbname=wfcre593_auditapi", "wfcre593_4maudit", "Kdsakm783");
        } catch (PDOException $ex) {
            echo $ex;
        }
    }

    public function fecharBD() {
        try {
            $this->pdo = null;
        } catch (Exception $ex) {
            echo $ex;
        }
    }

    public function listAnaliseProduto($produto) {
        try {
            $this->abrirBD();
            $query = $this->listVisita($produto);
            $obj = new AnaliseDeProduto();
            $lista = $query->fetchAll(PDO::FETCH_OBJ);
            foreach ($lista AS $row) {
                $obj->idProduto = $row->id_produto;
                $obj->idPesquisaPreco = $row->id_pesquisapreco;
                $obj->descricao = $row->descricao;
                $obj->pdv = count($this->countCliente()->fetchAll());
                $obj->media = $row->preco + $obj->media;
                $obj->presenca = count($lista);
                $obj->cobertura = number_format(($obj->presenca / $obj->pdv) * 100, 2);
                $obj->diferenca = "vazio";
            }
            $obj->mediaPreco();
            return $obj;
        } catch (PDOException $ex) {
            echo $ex;
        }
    }

    private function listVisita($produto) {
        try {
            $query = $this->pdo->query("SELECT DISTINCT p.id AS id_produto, pp.id AS id_pesquisapreco, p.descricao, pp.preco, c.razao_social, c.id as Cliente, v.id as Visita from wfcre593_auditapi.pesquisa_preco pp
                                    JOIN wfcre593_auditapi.visita v ON v.id = pp.visita_id
                                    JOIN wfcre593_auditapi.produto p ON p.id = pp.produto_id
                                    JOIN wfcre593_auditapi.cliente c ON c.id = v.cliente_id
                                    where p.id = $produto ");
            return $query;
        } catch (PDOException $ex) {
            echo $ex;
        }
    }

    public function countCliente() {
        try {
            return $this->pdo->query("select *from cliente");
        } catch (PDOException $ex) {
            echo $ex;
        }
    }

    public function listProduto($subcategoria) {
        try {
            return $this->pdo->query("select *from produto where subcategoria_id = $subcategoria");
        } catch (PDOException $ex) {
            echo $ex;
        }
    }

    public function listCategoria() {
        try {
            $this->abrirBD();
            return $this->pdo->query("select *from categoria");
        } catch (PDOException $ex) {
            echo $ex;
        }
    }

    public function listSubCategoria($categoria) {
        try {
            $this->abrirBD();
            return $this->pdo->query("select *from subcategoria where categoria_id = $categoria");
        } catch (PDOException $ex) {
            echo $ex;
        }
    }

}
?>
