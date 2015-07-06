<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControllerBD
 *
 * @author berg
 */
class ControllerBD {
    
    private $pdo = null;
    
    public function __construct() {
        //vazio;
    }
    
    public function abrirBD() {
        try{
            $this->pdo = new PDO("mysql:host=localhost;dbname=wfcre593_auditapi", "wfcre593_4maudit", "Kdsakm783");
        }catch(PDOException $ex){
            $this->pdo = new PDO("mysql:host=ns132.hostgator.com.br;dbname=wfcre593_auditapi", "wfcre593_4maudit", "Kdsakm783");
        }
        return $this->pdo;
    }
    
}