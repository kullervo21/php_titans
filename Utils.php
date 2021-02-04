<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

trait Utils{
    
    public function aPortee($defenseur, $portee){
        if (abs($this->position()-$defenseur->position())<=$portee){
            echo ' qui est a portée ! ';
            return true;
        }else{
            echo ' mais il est trop loin ';
            return false;
        }
    }
    
    public function distance( $defenseur){
        echo ' La distance est de : ' .abs($this->position()-$defenseur->position());
        return abs($this->position()-$defenseur->position());
    }
    
    public function attaqueDragon($defenseur){
        echo $this->nom() . ' attaque violement ' . $defenseur->nom();
        if(($this->isVivant()) && ($defenseur->isVivant()) && $this->aPortee($defenseur, $this->porteeFlamme())){
            $defenseur->faiblir($this->pointsAttaque());
            $this->faiblir($this->distance($defenseur));
            echo ' Il reste ' .$this->pointsDeVie(). ' points de vie à ' .$this->nom(). ' et ' .$defenseur->pointsDeVie(). ' à ' .$defenseur->nom();
        }
        if(!$defenseur->isVivant()&& $this->isVivant()){
            $this->setNiveau($this->niveau()+1);
            echo ' Felicitation, ' .$this->nom(). ' gagne 1 niveau. Il est desormais niveau : ' .$this->niveau();
        }
    }
    
    public function attaqueHydre($defenseur){
        echo $this->nom() . ' crache salement sur ' . $defenseur->nom();
        if(($this->isVivant()) && ($defenseur->isVivant()) && $this->aPortee($defenseur, $this->longueurCou())){
            $defenseur->faiblir($this->pointsAttaque()+$this->dosePoison());
            echo ' Il reste ' .$this->pointsDeVie(). ' points de vie à ' .$this->nom(). ' et ' .$defenseur->pointsDeVie(). ' à ' .$defenseur->nom();
        }
        if(!$defenseur->isVivant()&& $this->isVivant()){
            $this->setNiveau($this->niveau()+1);
            echo ' Felicitation, ' .$this->nom(). ' gagne 1 niveau. Il est desormais niveau : ' .$this->niveau();
        }
    }
    
    }
    
