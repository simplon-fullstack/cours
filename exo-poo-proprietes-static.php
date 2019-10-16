<?php

class Danseuse
{
    //--------------------------------
    // PROPRIETES STATIC DE CLASSE
    public static $musique          = "rock";
    public static $salleSpectacle   = "Dome";
    public static $nomGroupe        = "les spice girls";
    public static $manager          = "";

    // METHODES STATIC DE CLASSE
    static function voyager ($salleSpectacle)
    {
        // JE MEMORISE LA SALLE DE SPECTCALE
        Danseuse::$salleSpectacle = $salleSpectacle;    
    }

    //--------------------------------
    // PROPRIETES D'OBJET
    public $experience  = 0; // VALEUR PAR DEFAUT POUR CHAQUE OBJET
    public $nom         = "";

    // METHODES D'OBJET
    // ON PEUT UTILISER $this POUR SAVOIR QUEL OBJET A SERVI A ACTIVER LA METHODE D'OBJET
    function danser ($style)
    {
        echo "<h3>Nous sommes à " . Danseuse::$salleSpectacle . "</h3>";
        // $this EST UNE VARIABLE SPECIALE QUI RENVOIE A L'OBJET 
        // QUI A SERVI A APPELER LA METHODE D'OBJET
        // DANS UNE METHODE GRACE $this JE PEUX ACCEDER AUX PROPRIETES DE L'OBJET 
        echo "<h3>J'appelle " . $this -> nom . "</h3>";
    }

}


// JE PEUX CREER PLUSIEURS OBJETS 
// ET LEUR DONNER DES VALEURS DIFFERENTES POUR LES PROPRIETES D'OBJET
$danseuse1 = new Danseuse;
$danseuse1 -> nom = "tania";

$danseuse2 = new Danseuse;
$danseuse2 -> nom = "maria";

$danseuse3 = new Danseuse;
$danseuse3 -> nom = "fazia";

Danseuse::$nomGroupe = "les totally spice";
Danseuse::$manager = "long";

// CHAQUE PROPRIETE D'OBJET EST INDIVIDUEL A CHAQUE OBJET
echo $danseuse1 -> nom;     // tania
echo $danseuse2 -> nom;     // maria

// voyager EST UNE METHODE static DE CLASSE
Danseuse::voyager("Paris");

// danser EST UNE METHODE D'OBJET
$danseuse1->danser("rock");         // $this = $danseuse1
$danseuse2->danser("valse");        // $this = $danseuse2



