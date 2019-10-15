<?php

class Pompier
{
    // METHODES
    // METHODE MAGIQUE => CONSTRUCTEUR
    // LE NOM DOIT ETRE __construct
    // CETTE METHODE EST OPTIONNELLE
    // MAIS SI UNE CLASSE CONTIENT CETTE METHODE
    // ALORS PHP ACTIVE LA METHODE QUAND ON ECRIT new Pompier
    function __construct ()
    {
        // debug
        echo "<h1>__construct</h1>";
    }

    // METHODE MAGIQUE => DESTRUCTEUR
    // LE NOM DOIT ETRE __construct
    function __destruct ()
    {
        // debug
        echo "<h1>__destruct</h1>";
    }

    // MOI JE PEUX CHOISIR LE NOM DE MES METHODES
    function eteindreFeu ()
    {

    }
}

echo "<h1>AVANT</h1>";
$long = new Pompier;    
    // => ACTIVE LA METHODE __construct
$long -> eteindreFeu(); 
    // J'ECRIS QUE JE VEUX APPELER LA METHODE etiendreFeur
echo "<h1>APRES</h1>";

// A LA FIN DU PROGRAMME
// PHP DETRUIT LES VARIABLES
// => QUAND ON DETRUIT UN OBJET
// => ON DECLENCHE LA METHODE MAGIQUE __destruct
















echo "<h1>AVANT</h1>";
$long = new Pompier;    
$long -> eteindreFeu(); 
echo "<h1>APRES</h1>";






