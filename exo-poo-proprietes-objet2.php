<?php

class Medecin
{
    //-------------------------------------------------
    // PROPRIETES STATIC DE CLASSE

    // METHODES STATIC DE CLASSE
    // => COLLECTIF: COMMUN A TOUS LES OBJETS DE LA CLASSE


    //-------------------------------------------------
    // PROPRIETES D'OBJET
    public  $nom = "";

    // METHODES D'OBJET
    // => INDIVIDUEL: CHAQUE OBJET A SES METHODES
    function sauverVie ($nomPersonne)
    {
        // debug
        echo "<h2>$nomPersonne est sauvée par {$this->nom}</h2>";
    }
}
// PROPRIETES ET METHODES D'OBJET
$medecin1 = new Medecin;
$medecin1 -> nom = "durand";
$medecin1 -> sauverVie("floflo");  // $this = $medecin1     
// ON MEMORISE "durand" DANS $medecin ET DANS SA PROPRIETE nom

$medecin2 = new Medecin;
$medecin2 -> nom = "pitt";
$medecin2 -> sauverVie("cloclo"); // $this = $medecin2



// IMPORTANT DE COMPRENDRE
// DANS UNE METHODE D'OBJET
// PHP PROPOSE LA VARIABLE $this
// QUI CONTIENT L'OBJET QUI A SERVI A APPELER LA METHODE


