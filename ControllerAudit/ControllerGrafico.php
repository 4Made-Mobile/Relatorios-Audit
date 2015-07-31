<?php

include_once "../../ControllerAudit/ControllerBD.php";

class ControllerGrafico extends ControllerBD{

    private $pdo = null;

//Abrir conexão com o banco
    public function abrirBD() {
        try {
            $this->pdo = ControllerBD::abrirBD();
        } catch (PDOException $ex) {
            echo $ex;
        }
    }

    public function fecharBD() {
        try {
            $this->pdo = NULL;
        } catch (Exception $ex) {
            echo $ex;
        }
    }

//Gera as informações para o gráfico e se conecta com a  view
    public function graficoConcorrencia($produto) {
        try {
            $array1 = array();
            //analistaProduto é a analise do seu próprio produto
            $analistaProduto = $this->analiseProduto($this->listVisita($produto)->fetchAll());
            //Nessa parte a partir do produto é selecionado a lista dos concorrentes
            $lista = $this->listConcorrencia($produto);
            if (empty($lista)) {
                return false;
            }
            foreach ($lista->fetchAll() as $linha) {
                $lista2 = $this->listVisitaConcorrencia($linha['produto_concorrencia_id']);
                foreach ($lista2->fetchAll() AS $linha) {
                    array_push($array1, $this->analiseConcorrencia($linha));
                }
            }
            $array2 = array($analistaProduto, $array1);
            //fecha o banco de dados
            return $array2;
        } catch (PDOException $ex) {
            //Caso tudo dê errado garante fechar a conexão
            echo "ERRO: " + $ex;
        }
    }

    public function visitaMes($data1, $data2){
        try{
            $this->abrirBD();
            $query = $this->pdo->query("SELECT data FROM wfcre593_auditapi.visita where data between '$data2' and '$data1'");
            $resultado = count($query->fetchAll());
            $totalCliente = count($this->listCliente()->fetchAll());
            $array = array($resultado, $totalCliente);
            return $array;
        } catch (PDOException $ex) {

        }
    }

    private function visitaDiaFeita($data){
      try{
        $query = $this->pdo->query("SELECT data FROM wfcre593_auditapi.visita where data = '$data' and visita_status_id = 1");
        return $query;
      }catch(PDOException $ex){
        echo $ex;
      }
    }

    private function visitaDiaNaoFeita($data){
      try{
      $query = $this->pdo->query("SELECT data FROM wfcre593_auditapi.visita where data = '$data' and visita_status_id != 1");
      return $query;
      }catch(PDOException $ex){
        echo $ex;
      }
    }

    public function visitaDia($data){
      try{
        $this->abrirBD();
        $count1 = count($this->visitaDiaFeita($data)->fetchAll());
        $count2 = count($this->visitaDiaNaoFeita($data)->fetchAll());
        $array = array($count1, $count2);
        return $array;
      }catch(PDOException $ex){
          echo $ex;
      }
    }

//Lista a quantidade de pontos de venda
    private function listCliente() {
        try {
            $query = $this->pdo->query("select *from cliente");
            return $query;
        } catch (PDOException $ex) {
            echo $ex;
        }
    }

//Lista os id's que são concorrencia de um produto específico
    private function listConcorrencia($id) {
        try {
            $query = $this->pdo->query("select *from wfcre593_auditapi.concorrencia where produto_id = $id");
            return $query;
        } catch (Exception $ex) {
            echo $ex;
        }
    }

//Lista os produtos de acordo com o subcategoria informada
    public function listProduto($subcategoria) {
        try {
            $query = $this->pdo->query("select *from produto where subcategoria_id = $subcategoria");
            return $query;
        } catch (PDOException $ex) {
            echo $ex;
        }
    }

    public function analiseConcorrencia($lista) {
        try {
            $obj = new AnaliseDeProduto();
            foreach ($lista AS $row) {
                $obj->idProduto = $row->id_produto;
                $obj->idPesquisaPreco = $row->id_pesquisapreco;
                $obj->descricao = $row->descricao;
                $obj->descricao = utf8_encode($obj->descricao);
                $obj->descricao = utf8_encode($obj->descricao);
                $obj->pdv = count($this->listCliente()->fetchAll());
                $obj->media = $row->preco + $obj->media;
                $obj->presenca = count($lista);
                $obj->cobertura = number_format(($obj->presenca / $obj->pdv) * 100, 2);
                $obj->diferenca = NULL;
            }
            $obj->mediaPreco();
            return $obj;
        } catch (PDOException $ex) {
            echo $ex;
        }
    }

    private function analiseProduto($lista) {
        try {
            $obj = new AnaliseDeProduto();
            foreach ($lista AS $row) {
                $obj->idProduto = $row['id_produto'];
                $obj->idPesquisaPreco = $row['id_pesquisapreco'];
                $obj->descricao = $row['descricao'];
                $obj->descricao = utf8_encode($obj->descricao);
                $obj->pdv = count($this->listCliente()->fetchAll());
                $obj->media = $row['preco'] + $obj->media;
                $obj->presenca = count($lista);
                $obj->cobertura = number_format(($obj->presenca / $obj->pdv) * 100, 2);
                $obj->diferenca = NULL;
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

    private function listVisitaConcorrencia($id) {
        try {
            $query = $this->pdo->query("SELECT DISTINCT p.id AS id_produto, pp.id AS id_pesquisapreco, p.descricao, pp.preco, c.razao_social, c.id as Cliente, v.id as Visita from wfcre593_auditapi.pesquisa_preco_concorrencia pp
                                    JOIN wfcre593_auditapi.visita v ON v.id = pp.visita_id
                                    JOIN wfcre593_auditapi.produto_concorrencia p ON p.id = pp.produto_concorrencia_id
                                    JOIN wfcre593_auditapi.cliente c ON c.id = v.cliente_id
                                    where p.id = $id ");
            return $query;
        } catch (Exception $ex) {
            echo $ex;
        }
    }

    public function listSubCategoria() {
        try {
            $query = $this->pdo->query("select *from subcategoria");
            return $query;
        } catch (Exception $ex) {
            echo $ex;
        }
    }

}

?>
