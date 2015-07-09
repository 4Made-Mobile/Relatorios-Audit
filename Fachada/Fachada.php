<?php

include_once '../../ControllerAudit/ControllerLogin.php';
include_once '../../ControllerAudit/ControllerProduto.php';
include_once '../../ControllerAudit/ControllerCliente.php';
include_once '../../ControllerAudit/ControllerRoteiro.php';
include_once '../../ControllerAudit/ControllerGrafico.php';
include_once '../../ControllerAudit/ControllerAnaliseProduto.php';
include_once '../../ControllerAudit/ControllerLayout.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Fachada
 *
 * @author berg
 */

class Fachada {

    //Utilizado para logar no sistema
    public function verificaLogin($login, $senha) {
        try {
            $obj = new ControllerLogin();
            $res = $obj->verificaLogin($login, $senha);
            return $res;
        } catch (Exception $ex) {
            echo $ex;
        }
    }

    //Lista dos produtos
    public function listProduto() {
        try {
            $obj = new ControllerProduto();
            $query = $obj->listProduto();
            return $query;
        } catch (Exception $ex) {
            echo $ex;
        }
    }

    public function listCliente(){
        try{
            $cliente = new ControllerCliente();
            $query = $cliente->listCliente();
            return $query;
        } catch (Exception $ex) {
            echo $ex;
        }
    }

    public function countCliente(){
        try{
            $cliente = new ControllerCliente();
            $count = $cliente->countCliente();
            return $count;
        } catch (Exception $ex) {
            echo $ex;
        }
    }


    public function listRoteiro(){
        try{
            $roteiro = new ControllerRoteiro();
            $query = $roteiro->listRoteiro();
            return $query;
        }  catch (Exception $ex){
            echo $ex;
        } catch (Exception $ex) {

        }
    }

    public function visitaMes($desempenho = null){
        try{
          if($desempenho == null){
              $grafico = new ControllerGrafico();
              $data1 = date("Y-m-d");
              $data2 = date("Y-m-01");
              $visitaData = $grafico->visitaMes($data1, $data2);
              return $visitaData;
            }else{
              $grafico = new ControllerGrafico();
              $data1 = date("Y-m-d");
              $data2 = date("Y-m-d", strtotime("-30 days"));
              $visitaData = $grafico->visitaMes($data1,$data2);
              return $visitaData;
            }
        } catch (Exception $ex) {
            echo $ex;
        }
    }

    public function footer(){
        try{
            $layout = new ControllerLayout();
            $layout->footer();
        } catch (Exception $ex) {
            echo $ex;
        }
    }

}
