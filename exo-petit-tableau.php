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
        <h3>EXERCICE FONCTION: LE PLUS PETIT DANS UN TABLEAU</h3>
<?php

// 
function trouverMinN ($tabNombre)
{
    // COMPLETER LE CODE MANQUANT
    // ATTENTION: NE PAS OUBLIER DE DONNER UNE VALEUR INITIALE AU PLUS PETIT
    // PARCOURIR LE TABLEAU DU PREMIER AU DERNIER ELEMENT
    // ET POUR CHAQUE ELEMENT COMPARER AVEC LE PLUS PETIT
    $min = $tabNombre[0];
    foreach($tabNombre as $nombre)
    {
        if ($nombre < $min)
            $min = $nombre;
    }

    return $min;
}

// TESTS POUR VERIFIER
$resultat = trouverMinN([ 32, 5, 1, 2 ]);
echo "<h4>le plus petit est $resultat</h4>";

$resultat = trouverMinN([ 12, 11, 33, 78 ]);
echo "<h4>le plus petit est $resultat</h4>";

?>
</section>
    <script>
// Créer une fonction qui prend en paramètre un tableau de nombres 
// et qui retourne le plus petit des éléments du tableau

// EN JS
// LE PARAMETRE tabNombre EXISTE SEULEMENT 
// DANS LE BLOC D'ACCOLADES DE LA FONCTION
function trouverMinN (tabNombre)
{
    // AJOUTER LE CODE MANQUANT
    // IL FAUT DONNER UNE VALEUR INITIALE A min
    min = tabNombre[0]; // ON PREND LE PREMIER COMME VALEUR INITIALE

    // PARCOURIR LE TABLEAU DU DEBUT A LA FIN
    tabNombre.forEach(function(nombre){
        if (nombre < min)
            min = nombre; // le nombre devient le plus petit
    });

    return min;
}

// ERREUR: ON NE PEUT UTILISER LE PARAMETRE DE FONCTION tabNombre
// EN DEHORS DE LA FONCTION 
// console.log(tabNombre);
// exo-petit-tableau.php:36 Uncaught ReferenceError: tabNombre is not defined

// TESTER AVEC 
console.log(trouverMinN([ 32, 5, 1, 2 ]));      // 1
console.log(trouverMinN([ 12, 11, 33, 78 ]));   // 11
    </script>    
</body>
</html>