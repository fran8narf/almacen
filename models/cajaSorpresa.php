<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cajaSorpresa
 *
 * @author Fran
 */
class cajaSorpresa {
    private $ID = 0;
    private $color;
    private $altura;
    private $anchura;
    private $profundidad;
    private $contenido;
    private $fecha_registro;
    
    public function __construct($color, $altura, $anchura, $profundidad, $contenido) {
        $this->color = $color;
        $this->altura = $altura;
        $this->anchura = $anchura;
        $this->profundidad = $profundidad;
        $this->contenido = $contenido;
    }

    public function getID() {
        return $this->ID;
    }

    public function getColor() {
        return $this->color;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getAnchura() {
        return $this->anchura;
    }

    public function getProfundidad() {
        return $this->profundidad;
    }

    public function getContenido() {
        return $this->contenido;
    }

    public function getFecha_registro() {
        return $this->fecha_registro;
    }

    public function setID($ID) {
        $this->ID = $ID;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function setAnchura($anchura) {
        $this->anchura = $anchura;
    }

    public function setProfundidad($profundidad) {
        $this->profundidad = $profundidad;
    }

    public function setContenido($contenido) {
        $this->contenido = $contenido;
    }

    public function setFecha_registro($fecha_registro) {
        $this->fecha_entrada = $fecha_registro;
    }
}
