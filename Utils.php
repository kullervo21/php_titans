<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

trait Utils{
    
    public function aPortee($defenseur){
        if (abs($this->position()-$defenseur->position())<=($this->porteeFlamme())){
            echo ' qui est a portée ! ';
            return true;
        }else{
            echo ' mais il est trop loin';
            return false;
        }
    }
    
    public function distance( $defenseur){
        echo ' La distance est de : ' .abs($this->position()-$defenseur->position());
        return abs($this->position()-$defenseur->position());
    }
    
    public function attaqueDragon($attaquant, $defenseur){
        echo $attaquant->nom() . ' attaque violement ' . $defenseur->nom();
        if(($attaquant->isVivant()) && ($defenseur->isVivant()) && $attaquant->aPortee( $defenseur)){
            $defenseur->faiblir($attaquant->pointsAttaque());
            $attaquant->faiblir($attaquant->distance($defenseur));
            echo ' Il reste ' .$attaquant->pointsDeVie(). ' points de vie à ' .$attaquant->nom(). ' et ' .$defenseur->pointsDeVie(). ' à ' .$defenseur->nom();
        }
        if(!$defenseur->isVivant()){
            $attaquant->setNiveau($attaquant->niveau()+1);
            echo ' Felicitation, ' .$attaquant->nom(). ' gagne 1 niveau. Il est desormais niveau : ' .$attaquant->niveau();
        }
    }
    
}