<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Hydre extends Creature {
    use Utils;
    private $_longueurCou;
    private $_dosePoison;

    function longueurCou() {
        return $this->_longueurCou;
    }

    function dosePoison() {
        return $this->_dosePoison;
    }
    function set_longueurCou($_longueurCou): void {
        $this->_longueurCou = $_longueurCou;
    }

    function set_dosePoison($_dosePoison): void {
        $this->_dosePoison = $_dosePoison;
    }

    public function __construct($nom, $niveau, $pointsDeVie, $force, $longueurCou, $dosePoison, $position = 0) {
        parent::__construct($nom, $niveau, $pointsDeVie, $force, $position);
        $this->set_longueurCou($longueurCou);
        $this->set_dosePoison($dosePoison);
    }
    
    public function empoisonne(Creature $victime){
        $this->attaqueHydre($victime);
    }
    
    
    
}
