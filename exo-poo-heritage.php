<?php
// PROBLEMATIQUE
// LES 2 CLASSES Medecin ET Serveur 
// ONT UNE PROPRIETE D'OBJET $nom
// => REPETITION
// => PEUT-ON EVITER DE REPETER LE CODE ?
// EN POO, IL ME FAUDRAIT UNE CLASSE COMMUNE
class GrandParent
{
    // PROPRIETE
    public $dynastie = "";
}

class Metier
    extends GrandParent
{
    //-------------------------------------------------
    // PROPRIETES D'OBJET
    public $nom = "";
}

class Serveur       // CLASSE ENFANT
    extends Metier  // HERITAGE AVEC LA CLASSE PARENTE Metier
{
    // PROPRIETES D'OBJET
    // METHODES D'OBJET
    function prendreCommande($commande)
    {

    }
}
$serveur = new Serveur;
$serveur -> nom = "victor"; 
// nom EST UNE PROPRIETE DE LA CLASSE PARENTE Metier
$serveur -> dynastie = "Bonaparte";
// dynastie EST UNE PROPRIETE DE LA CLASSE "GRAND PARENTE" GrandParent
echo "<h2>Bonjour, je suis {$serveur->nom} des {$serveur->dynastie}</h2>";
