<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Dragon extends Creature {
    use Utils;
    private $_porteeFlamme;
    
    public function __construct($nom, $niveau, $pointsDeVie, $force, $porteeFlamme, $position = 0) {
        parent::__construct($nom, $niveau, $pointsDeVie, $force, $position);
        $this->_porteeFlamme = $porteeFlamme;
    }
    
    
    function porteeFlamme() {
        return $this->_porteeFlamme;
    }

    function setPorteeFlamme($porteeFlamme): void {
        $this->_porteeFlamme = $porteeFlamme;
    }

    function voler($cases){
      $this->setPosition($this->position()+$cases);
  }
    
    function souffleSur(Creature $victime){
        $this->attaqueDragon($victime);
    }
    
}