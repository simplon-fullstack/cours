<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<section>
        <h3>EXERCICE FONCTION: CALCULER PRIX TTC</h3>
<?php
function calculerSurfaceMurs ($hauteur, $largeur, $longueur)
{
    $surface = 2 * ($largeur + $longueur) * $hauteur;
    return $surface;
}

// IMPORTANT: L'ORDRE DES VALEURS EST IMPORTANT
$resultat = calculerSurfaceMurs(2, 3, 4);
echo "<h4>le prix TTC est $resultat</h4>";

$resultat = calculerSurfaceMurs(5, 6, 7);
echo "<h4>le prix TTC est $resultat</h4>";

?>
</section>
    <script>

// Créer une fonction qui prend en paramètre 3 paramètres
// * hauteur
// * largeur
// * longueur
// La fonction doit calculer la surface des 4 murs

// EN JS
function calculerSurfaceMurs (hauteur, largeur, longueur)
{
    // AJOUTER LE CODE MANQUANT
    surface = (longueur + largeur) * 2 * hauteur;
    // surface =    (largeur  * hauteur) 
    //            + (longueur * hauteur) 
    //            + (largeur  * hauteur) 
    //            + (longueur * hauteur);

    return surface;
}

// TESTER AVEC 
// IMPORTANT: L'ORDRE DES VALEURS EST IMPORTANT
console.log(calculerSurfaceMurs(2, 3, 4));      // 28
console.log(calculerSurfaceMurs(5, 6, 7));      // 130        
    </script>    
</body>
</html>