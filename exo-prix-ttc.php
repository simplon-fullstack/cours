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

function calculerPrixTTC ($prixHT, $tauxTVA)
{
    $prixTTC = $prixHT * (1 + $tauxTVA / 100);
    return $prixTTC;
}

// TESTS POUR VERIFIER
$resultat = calculerPrixTTC(100, 20);
echo "<h4>le prix TTC est $resultat</h4>";

$resultat = calculerPrixTTC(200, 10);
echo "<h4>le prix TTC est $resultat</h4>";

?>
</section>
    <script>
// Créer une fonction qui prend en paramètre 2 paramètres
// * prixHT
// * tauxTVA
// La fonction doit calculer et retourner le prixTTC

// EN JS
function calculerPrixTTC (prixHT, tauxTVA)
{
    // AJOUTER LE CODE MANQUANT
    // prixTTC = prixHT * (1 + tauxTVA / 100);
    prixTTC = prixHT * tauxTVA /100 + prixHT;

    return prixTTC;
}

// TESTER AVEC 
console.log(calculerPrixTTC(100, 20));      // 120
console.log(calculerPrixTTC(200, 10));      // 220
    </script>    
</body>
</html>