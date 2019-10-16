<?php

class Personne
{
    // PROPRIETE STATIC DE CLASSE
    // COLLECTIF A TOUS LES OBJETS DE LA CLASSE
    public static $pays;
    public static $formation;
    public static $genre;

    // PROPRIETES D'OBJET => INDIVIDUEL A CHAQUE OBJET
    // CE QUI SERT A DISTINGUER UNE PERSONNE D'UNE AUTRE
    // => MODELISATION 
    // => RGPD
    public $nom;        // ATTENTION, IL Y A $
    public $prenom;
    public $login;
    public $password;
    public $adresse;
}

$personne1 = new Personne;
// ECRITURE
// POUR STOCKER UNE VALEUR DANS UNE PROPRIETE, JE PASSE D'ABORD PAR L'OBJET
$personne1 -> nom   = "gomis";    // ON MEMORISE UN TEXTE DANS LA PROPRIETE
// ATTENTION PAS DE $ AVANT nom
$personne1 -> prenom = "florence";
$personne1 -> login  = "gomis";

// LECTURE: ACCEDER A LA VALEUR D'UNE PROPRIETE
echo "Bonjour Je m'appelle " . $personne1->nom;

// ECRIRE DANS UNE PROPRIETE STATIC DE CLASSE
// ON PASSE PAR LA CLASSE
Personne::$pays = "FRANCE";
Personne::$formation = "DEVELOPPEUSES WEB 100% FEMMES";

// LECTURE: ACCEDER A LA VALEUR D'UNE PROPRIETE
echo "Je suis en formation " . Personne::$formation;


