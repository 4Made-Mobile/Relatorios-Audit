<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AnaliseDePreco
 *
 * @author Bergson
 */
class AnaliseDeProduto {

    public $idProduto = 0;
    public $idPesquisaPreco = 0;
    public $descricao = 0;
    public $pdv = 0.00;
    public $media = 0.00;
    public $presenca = 0.00;
    public $cobertura = 0.00;
    public $diferenca = 0.00;

    function __construct() {
        $descricao = '';
        $pdv = 0.00;
        $media = 0.00;
        $presenca = 0.00;
        $cobertura = 0.00;
        $diferenca = 0.00;
    }

    public function mediaPreco() {
        if ($this->presenca != 0) {
            $this->media = number_format($this->media / $this->presenca, 2);
        }
    }

    function getDescricao_produto() {
        return $this->descricao_produto;
    }

    function getPdv() {
        return $this->pdv;
    }

    function getMedia() {
        return $this->media;
    }

    function getPresenca() {
        return $this->presenca;
    }

    function getCobertura() {
        return $this->cobertura;
    }

    function getDiferenca() {
        return $this->diferenca;
    }

    function setDescricao_produto($descricao_produto) {
        $this->descricao_produto = $descricao_produto;
    }

    function setPdv($pdv) {
        $this->pdv = $pdv;
    }

    function setMedia($media) {
        $this->media = $media;
    }

    function setPresenca($presenca) {
        $this->presenca = $presenca;
    }

    function setCobertura($cobertura) {
        $this->cobertura = $cobertura;
    }

    function setDiferenca($diferenca) {
        $this->diferenca = $diferenca;
    }

}
