<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

spl_autoload_register('chargerClasse');
/*require 'Creature.php';
require 'Dragon.php';*/

$test = new Creature('Grande méchante creature', 5, 5, 10,1);

/*echo "<p>" .$test."</p>";

echo "<p>" . $test->isVivant() . "</p>";

echo "<p> Position : " . $test->position() . "</p>";

$test->deplacer(5);

echo "<p> Nouvelle position : " . $test->position() . "</p>";


echo "<p> Niveau actuel : " . $test->niveau() . "</p>";

$test->modifNiveau(-10);

echo "<p> Nouveau niveau : " . $test->niveau() . "</p>";

echo "<p> Point de vie : " . $test->pointsDeVie() . "</p>";

$test->faiblir(5);

echo "<p> Nouveaux point de vie : " . $test->pointsDeVie() . "</p>";

$test->faiblir(50);

echo "<p> Nouveaux point de vie : " . $test->pointsDeVie() . "</p>";*/

$drag = new Dragon("Dracaufeu", 2, 15, 5, 10, 4);
$hyd = new Hydre("Trioxhydre", 4, 150, 10, 10, 5, 5);

$hyd->empoisonner($drag);

//drag->souffleSur($test);

        function chargerClasse($classe) {
            require $classe . '.php'; 
        }
        
