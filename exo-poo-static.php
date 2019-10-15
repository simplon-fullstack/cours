<?php


class Pompier
{
    // METHODES STATIC
    // ATTENTION: CE SONT DES METHODES DE CLASSE
    static function reanimer ()
    {
        // AJOUTER LE CODE ICI
        // debug
        echo "<h1>Pompier::reanimer</h1>";
    }

    // METHODES
    // CE SONT DES METHODES D'OBJET
    function eteindreFeu ()
    {
        // AJOUTER LE CODE ICI
        // debug
        echo "<h1>eteindreFeu</h1>";
    }

}

$nicolas = new Pompier;
$nicolas -> eteindreFeu();

// POUR ACTIVER UNE METHODE static
// => JE N'AI PAS BESOIN DE CREER D'OBJET
// IL FAUT DONNER LA CLASSE AVANT LE NOM DE LA METHODE
// :: OPERATEUR DE RESOLUTION DE PORTEE
// https://www.php.net/manual/fr/language.oop5.paamayim-nekudotayim.php
Pompier::reanimer();

// => C'EST UN PEU UNE TRUANDERIE
// C'EST COMME SI ON FAISAIT DU FONCTIONNEL
function Pompier_reanimer ()
{
    // debug
    echo "<h1>Pompier_reanimer</h1>";

}

Pompier_reanimer();
