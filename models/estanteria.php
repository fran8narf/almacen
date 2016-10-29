<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of estanteria
 *
 * @author Fran
 */
class estanteria {
    private $ID = 0;
    private $material;
    private $n_lejas;
    private $pasillo;
    private $n_estanteria;
    private $lejas_ocupadas;
    
    public function __construct($material, $n_lejas, $pasillo, $n_estanteria, $lejas_ocupadas) {
        $this->material = $material;
        $this->n_lejas = $n_lejas;
        $this->pasillo = $pasillo;
        $this->n_estanteria = $n_estanteria;
        $this->lejas_ocupadas = $lejas_ocupadas;
    }

    public function getID() {
        return $this->ID;
    }

    public function getMaterial() {
        return $this->material;
    }

    public function getN_lejas() {
        return $this->n_lejas;
    }

    public function getPasillo() {
        return $this->pasillo;
    }

    public function getN_estanteria() {
        return $this->n_estanteria;
    }

    public function getLejas_ocupadas() {
        return $this->lejas_ocupadas;
    }

    public function setID($ID) {
        $this->ID = $ID;
    }

    public function setMaterial($material) {
        $this->material = $material;
    }

    public function setN_lejas($n_lejas) {
        $this->n_lejas = $n_lejas;
    }

    public function setPasillo($pasillo) {
        $this->pasillo = $pasillo;
    }

    public function setN_estanteria($n_estanteria) {
        $this->n_estanteria = $n_estanteria;
    }

    public function setLejas_ocupadas($lejas_ocupadas) {
        $this->lejas_ocupadas = $lejas_ocupadas;
    }


}
