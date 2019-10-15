<?php

class Garagiste
{
    // METHODE MAGIQUE CONSTRUCTEUR
    // ON N'A PAS LE CHOIX SUR LE NOM DE LA METHODE __construct
    // MAIS ON PEUT CHOISIR LE NOMBRE DE PARAMETRES
    function __construct ($nom, $prenom)
    {
        // debug
        echo "<h1>Bonjour je m'appelle $prenom $nom ! Et je suis garagiste</h1>";
    }
}

// SI LA METHODE CONSTRUCTEUR DEMANDE DES PARAMETRES
// ALORS IL FAUT LES FOURNIR QUAND ON FAIT LE new
$victor = new Garagiste("Charlemagne", "victor");    
    // => PHP VA APPELER __construct("Charlemagne", "victor")



$gomis = new Garagiste("Gomis", "florence");

