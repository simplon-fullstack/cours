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
        <h3>EXERCICE FONCTION: CALCULER LA CONCATENATION DES TEXTES DANS UN TABLEAU</h3>
<?php
// EN PHP
function concatenerTexte ($tabLettre)
{
    // AJOUTER LE CODE MANQUANT
    $texteFinal = "";
    foreach($tabLettre as $indice => $lettre)
    {
        if ($indice > 0)
        {
            // ON AJOUTE LA VIRGULE AU TEXTE FINAL
            $texteFinal = "$texteFinal,$lettre" ;
        }
        else
        {
            // ON N(AJOUTE PAS LA VIRGULE) AU TEXTE FINAL
            $texteFinal = "$texteFinal$lettre" ;
        }
    }

    return $texteFinal;
}


$resultat = concatenerTexte([ 'a', 'b', 'c', 'd' ]);  // 'a,b,c,d'
echo "<h4>le texte final est $resultat</h4>";

// EN PHP: VERSION AVEC UN TABLEAU ASSOCIATIF
function concatenerTexteAsso ($nomTable, $tabAssoColonneValeur)
{
    // AJOUTER LE CODE MANQUANT
    $texteFinal = "";
    $texteToken = "";
    $indice     = 0;
    foreach($tabAssoColonneValeur as $cle => $valeur)
    {
        if ($indice > 0)
        {
            // ON AJOUTE LA VIRGULE AU TEXTE FINAL
            $texteFinal = "$texteFinal,$cle";
            $texteToken = "$texteToken,:$cle";
        }
        else
        {
            // ON N(AJOUTE PAS LA VIRGULE) AU TEXTE FINAL
            $texteFinal = "$texteFinal$cle";
            $texteToken = "$texteToken:$cle";
        }
        // J'INCREMENTE MOI MEME L'INDICE
        $indice++;
    }

    // JE COMPLETE LE TEXTE FINAL
    $texteFinal = "INSERT INTO $nomTable ( $texteFinal ) VALUES ($texteToken)";
    return $texteFinal;
}


$resultat = concatenerTexteAsso('contact', [ 'nom' => 'georges', 'email' => 'g@nomail.me', 'message' => 'coucou' ]);  // 'a,b,c,d'
echo "<h4>le texte final est $resultat</h4>";
// INSERT INTO contact
// ( nom,email,message )
// VALUES
// ( nom, email, message)
?>
</section>
    <script>
    </script>    
</body>
</html>