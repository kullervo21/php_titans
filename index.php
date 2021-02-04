<!DOCTYPE html>
 
<html>
    <head>
        <meta charset="UTF-8">
        <title>Le choc des titans</title>
    </head>
    <body>
        <?php
        spl_autoload_register('chargerClasse');
        /**
         * Combat entre le dragon et l'hydre passés en paramètres
         * @param Dragon $dragon
         * @param Hydre $hydre
         */
        function combat(Dragon $dragon, Hydre $hydre) {
            $hydre->empoisonne($dragon); // l'hydre a l'initiative (elle est plus rapide)
            $dragon->souffleSur($hydre);
        }
        /**
         * Chargement d'une classe
         * @param type $classe classe nécessaire
         */
        function chargerClasse($classe) {
            require $classe . '.php'; 
        }
    
        $dragon = new Dragon("Dragon rouge"   , 2, 10, 3, 20        );
        $hydre  =  new Hydre("Hydre maléfique", 2, 10, 1, 10, 1, 42 );

        echo "<p>" . $dragon . "<br />";
        echo "se prépare au combat avec :";
        echo "<br />" . $hydre . "</p>";

        echo "<h3>1er combat :</h3>";
        echo"Les créatures ne sont pas à portée, donc ne peuvent pas s'attaquer.";
        combat($dragon, $hydre);
        
        echo "<h4>Après le combat : </h4>";
        echo "<p>" . $dragon;
        echo "<br />" . $hydre . "</p>";

        echo "Le dragon vole à proximité de l'hydre :";
        $dragon->voler($hydre->position() - 1);
        echo "<p>" . $dragon . "</p>";

        echo"L'hydre recule d un pas :";
        $hydre->deplacer(1);
        echo "<p>" . $hydre . "</p>";
        
        echo "<h3>2ème combat :</h3>";
        echo "<p>+ l hydre inflige au dragon une attaque de 3 points".
                          " [ niveau (2) * force (1) + poison (1) = 3 ] ;<br />".
                          "+  le dragon inflige à l hydre une attaque de 6 points".
                          " [ niveau (2) * force (3) = 6 ] ;<br />".
                          " + pendant son attaque, le dragon perd 2 points de vie supplémentaires".
                          "[ correspondant à la distance entre le dragon et l hydre : 43 - 41 = 2 ]</p>" ;

        combat($dragon, $hydre);

        echo "<h4>Après le combat : </h4>";
        echo "<p>" . $dragon;
        echo "<br />" . $hydre . "</p>";
        
        echo "Le dragon avance d'un pas :";
        $dragon->deplacer(1);
        echo "<p>" . $dragon . "</p>";

        echo "<h3>3ème combat :</h3>";
        echo "<p>+ l hydre inflige au dragon une attaque de 3 points".
                          "[ niveau (2) * force (1) + poison (1) = 3 ] ;<br />".
                          "+ le dragon inflige à l'hydre une attaque de 6 points".
                          "[ niveau (2) * force (3) = 6 ] ;<br />".
                          "+ pendant son attaque, le dragon perd 1 point de vie supplémentaire".
                          "[ correspondant à la distance entre le dragon et l'hydre : 43 - 42 = 1 ] ;<br />".
                          "+ l'hydre est vaincue et le dragon monte au niveau 3.</p>";
        combat($dragon, $hydre);

        echo "<h4>Après le combat : </h4>";
        echo "<p>" . $dragon;
        echo "<br />" . $hydre . "</p>";

        echo "<h3>4ème combat :</h3>";
        echo"quand une créature est vaincue, rien ne se passe.";
        combat($dragon, $hydre);

        echo "<h4>Après le combat : </h4>";
        echo "<p>" . $dragon;
        echo "<br />" . $hydre . "</p>";
        ?>
    </body>
</html>
