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
        <h3>EXERCICE FONCTION: LE PLUS PETIT DES 3</h3>
<?php

function trouverMin3 ($nombre1, $nombre2, $nombre3)
{
    if ($nombre1 < $nombre2)
        $min = $nombre1;
    else
        $min = $nombre2;
    
    if ($nombre3 < $min)
        $min = $nombre3;

    return $min;
}

// TESTS POUR VERIFIER
$resultat = trouverMin3(32, 5, 2);
echo "<h4>le plus petit est $resultat</h4>";

$resultat = trouverMin3(12, 3, 78);
echo "<h4>le plus petit est $resultat</h4>";

?>
</section>
    <script>
// PLUS PETIT ENTRE 3 NOMBRES
// Créer une fonction qui prend en paramètres 2 nombres 
// et qui retourne le plus petit des 2

// EN JS
function trouverMin3 (nombre1, nombre2, nombre3)
{
    // AJOUTER LE CODE MANQUANT
    // JE COMPARE LES 2 PREMIERS NOMBRES
    if (nombre1 < nombre2)
        min = nombre1;
    else
        min = nombre2;

    // SI ON AJOUTE LE 3E NOMBRE
    if (nombre3 < min)
        min = nombre3;

    return min;
}

// TESTER AVEC 
console.log(trouverMin3(32, 5, 2));    // 2
console.log(trouverMin3(12, 3, 78));   // 3


    </script>    
</body>
</html>