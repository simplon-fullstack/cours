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
        <h3>EXERCICE FONCTION: CALCULER LA SOMME DES NOMBRES DANS UN TABLEAU</h3>
<?php

// Créer une fonction qui prend en paramètre un tableau de nombres 
// et qui retourne la somme de tous les nombres

// EN PHP
function calculerTotal($tabNombre)
{
    // AJOUTER LE CODE MANQUANT
    $total = 0;
    foreach($tabNombre as $nombre)
    {
        // ON AJOUTE LE NOMBRE AU TOTAL
        // $total = $total + $nombre;
        $total += $nombre;
    }
    return $total;
}

$resultat = calculerTotal([ 1, 2, 3, 4 ]);  // 10
echo "<h4>la somme est $resultat</h4>";


?>
</section>
    <script>
    </script>    
</body>
</html>