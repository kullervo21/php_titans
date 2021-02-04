<?php

/* 
 * Class créature définissant la class mère Créature
 * qui sera utilisé par les enfants
 * 
 */

class Creature {
   /* Variables */
private $_nom;
private $_niveau;
private $_pointsDeVie;
private $_force;
private $_position;


function nom() {
    return $this->_nom;
}

function niveau() {
    return $this->_niveau;
}

function pointsDeVie() {
    return $this->_pointsDeVie;
}

function force() {
    return $this->_force;
}

function position() {
    return $this->_position;
}

function setNom($_nom): void {
    $this->_nom = $_nom;
}

function setNiveau($_niveau): void {
    $this->_niveau = $_niveau;
}

function setPointsDeVie($_pointsDeVie): void {
    $this->_pointsDeVie = $_pointsDeVie;
}

function setForce($_force): void {
    $this->_force = $_force;
}

function setPosition($_position): void {
    $this->_position = $_position;
}

function __construct($nom, $niveau, $pointsDeVie, $force, $position=0) {
    $this->setNom($nom);
    $this->setNiveau($niveau);
    $this->setPointsDeVie($pointsDeVie);
    $this->setForce($force);
    $this->setPosition($position);
}

public function isVivant(){
    if ($this->pointsDeVie()>0){
        return true;
    }else {
        return false;
    }
}

public function pointsAttaque()  {
    if ($this->isVivant()){
        return ($this->niveau()*$this->force());
    } else {
        return 0;
    }
}

public function deplacer($deplacement){
    $this->setPosition((($this->position()+$deplacement)));
}

private function adieux(){
    echo $this->nom() . " n'est plus! ";
}

public function modifNiveau ($modifLvl){
    if($this->niveau()!=0){
        $this->setNiveau($this->niveau()+$modifLvl);
    }
    if ($this->niveau()<0){
        $this->setNiveau(0);
    }
}

public function faiblir($degat){
    if ($this->isVivant()==true){
            $this->setPointsDeVie($this->pointsDeVie()-$degat);
    }
    if ($this->isVivant()==false){
        $this->setPointsDeVie(0);
        $this->adieux();
    }

    
}

public function __toString() {
    return $this->nom() . ",niveau: " . $this->niveau() . ",points de vie: " . $this->pointsDeVie() . ",force: " . $this->force() . ",\points d'attaque : " . $this->pointsAttaque() . ",position: " . $this->position();
}



    }
