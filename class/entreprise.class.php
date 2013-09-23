<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Entreprise
 *
 * @author bruno
 */
class Entreprise {
    private $nomEnt1;
    private $nomEnt2;
    private $adr1;
    private $adr2;
    private $cpent;
    private $telent;
    private $ville;
    private $pays;
    private $b_cedex;
    private $cedex;
    
    
    
    
    
    public function getNomEnt1() {
        return $this->nomEnt1;
    }

    public function setNomEnt1($nomEnt1) {
        $this->nomEnt1 = $nomEnt1;
    }

    public function getNomEnt2() {
        return $this->nomEnt2;
    }

    public function setNomEnt2($nomEnt2) {
        $this->nomEnt2 = $nomEnt2;
    }

    public function getAdr1() {
        return $this->adr1;
    }

    public function setAdr1($adr1) {
        $this->adr1 = $adr1;
    }

    public function getAdr2() {
        return $this->adr2;
    }

    public function setAdr2($adr2) {
        $this->adr2 = $adr2;
    }

    public function getCpent() {
        return $this->cpent;
    }

    public function setCpent($cpent) {
        $this->cpent = $cpent;
    }

    public function getTelent() {
        return $this->telent;
    }

    public function setTelent($telent) {
        $this->telent = $telent;
    }

    public function getVille() {
        return $this->ville;
    }

    public function setVille($ville) {
        $this->ville = $ville;
    }

    public function getPays() {
        return $this->pays;
    }

    public function setPays($pays) {
        $this->pays = $pays;
    }

    public function getB_cedex() {
        return $this->b_cedex;
    }

    public function setB_cedex($b_cedex) {
        $this->b_cedex = $b_cedex;
    }

    public function getCedex() {
        return $this->cedex;
    }

    public function setCedex($cedex) {
        $this->cedex = $cedex;
    }

 
}

?>
