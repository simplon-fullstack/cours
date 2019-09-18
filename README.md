# COURS

cours et exercices

## JS ET PHP

    La programmation fonctionnelle est très importante pour les développeurs.

    Il faut voir les fonctions comme des boîtes
    * avec des entrées  (paramètres)
    * et une sortie     (valeur de retour)

    Les fonctions permettent
    * d'organiser son code
    * de centraliser son code pour ne pas le répéter (DRY)
    * de cacher la complexité d'un code dans une fonction
        * (dev senior code la fonction, dev junior utilise la fonction)
    * de mieux travailler en équipe

    CONSEIL:
    * pour distinguer les différentes fonctions, on leur donne un nom unique
    * utiliser un verbe dans le nom de la fonction


    A RETENIR:

    2 ETAPES:
    * définition/déclaration de la fonction
        (le code dans la fonction est en attente)
    * appel de la fonction
        (on active le code de la fonction)

    Les paramètres fournis en entrée à l'appel de la fonction
        * sont obligatoires
        * doivent être fournis dans le même ordre que lors de la déclaration de la fonction
        * les paramètres optionnels sont à la fin de la liste et proposent une valeur par défaut au paramètre

    Pour renvoyer la valeur de sortie de fonction
    on utilise le mot clé return suivie de la valeur à produire
    * l'instruction return arrête le code de la fonction
    * et le code suivant l'appel de la fonction reprend

    
## FONCTIONS EN JS

```js

    // DECLARER LA FONCTION
    function nomFonction (param1, param2)
    {
        // AJOUTER LE CODE MANQUANT

        return resultat;
    }

    // APPELER LA FONCTION
    var resultat = nomFonction(1, 2);  // param1 = 1 ET param2 = 2

    // AFFICHER DANS LA CONSOLE
    console.log(resultat);

```


## FONCTIONS EN PHP

https://www.php.net/manual/fr/language.functions.php

```php
<?php
    // DECLARER LA FONCTION
    function nomFonction ($param1, $param2)
    {
        // AJOUTER LE CODE MANQUANT

        return $resultat;
    }

    // APPELER LA FONCTION
    $resultat = nomFonction(1, 2);      // $param1 = 1 ET $param2 = 2

    // AFFICHER LE RESULTAT
    echo "<h3>LE RESULTAT EST $resultat</h3>";

?>
```











## EXERCICES FONCTIONS


### PLUS PETIT ENTRE 2 NOMBRES

    Créer une fonction qui prend en paramètres 2 nombres 
    et qui retourne le plus petit des 2

    // EN JS
    function trouverMin2 (nombre1, nombre2)
    {
        // AJOUTER LE CODE MANQUANT
        if (nombre1 < nombre2)
            min = nombre1;
        else
            min = nombre2;

        return min;
    }

    // TESTER AVEC 
    console.log(trouverMin2(32, 5));    // 5
    console.log(trouverMin2(12, 78));   // 12


    // EN PHP
    function trouverMin2 ($nombre1, $nombre2)
    {
        // AJOUTER LE CODE MANQUANT
        if ($nombre1 < $nombre2)
            $min = $nombre1;
        else
            $min = $nombre2;

        return $min;
    }

### PLUS PETIT ENTRE 3 NOMBRES

    Créer une fonction qui prend en paramètres 2 nombres 
    et qui retourne le plus petit des 2

    // EN JS
    function trouverMin3 (nombre1, nombre2, nombre3)
    {
        // AJOUTER LE CODE MANQUANT

        return min;
    }

    // TESTER AVEC 
    console.log(trouverMin3(32, 5, 2));    // 2
    console.log(trouverMin3(12, 3, 78));   // 3



### PLUS PETIT ENTRE N NOMBRES

    Créer une fonction qui prend en paramètre un tableau de nombres 
    et qui retourne le plus petit des éléments du tableau

    // EN JS
    function trouverMinN (tabNombre)
    {
        // AJOUTER LE CODE MANQUANT

        return min;
    }

    // TESTER AVEC 
    console.log(trouverMinN([ 32, 5, 1, 2 ]));      // 1
    console.log(trouverMinN([ 12, 11, 33, 78 ]));   // 11


### CALCULER LE PRIX TTC

    Créer une fonction qui prend en paramètre 2 paramètres
    * prixHT
    * tauxTVA
    La fonction doit calculer et retourner le prixTTC

    // EN JS
    function calculerPrixTTC (prixHT, tauxTVA)
    {
        // AJOUTER LE CODE MANQUANT

        return prixTTC;
    }

    // TESTER AVEC 
    console.log(calculerPrixTTC(100, 20));      // 120
    console.log(calculerPrixTTC(200, 10));      // 220


### CALCULER LA SURFACE DES MURS


    Créer une fonction qui prend en paramètre 3 paramètres
    * hauteur
    * largeur
    * longueur
    La fonction doit calculer la surface des 4 murs

    // EN JS
    function calculerSurfaceMurs (hauteur, largeur, longueur)
    {
        // AJOUTER LE CODE MANQUANT

        return surface;
    }

    // TESTER AVEC 
    console.log(calculerSurfaceMurs(2, 3, 4));      // 28
    console.log(calculerSurfaceMurs(5, 6, 7));      // 130


### CALCULER LA SOMME DES NOMBRES


    Créer une fonction qui prend en paramètre un tableau de nombres 
    et qui retourne la somme de tous les nombres

    // EN JS
    function calculerTotal (tabNombre)
    {
        // AJOUTER LE CODE MANQUANT

        return total;
    }

    // TESTER AVEC 
    console.log(calculerTotal([ 1, 2, 3, 4 ]));      // 10 
    console.log(calculerTotal([ 5, 6, 7, 8 ]));      // 26


### COMPTER COMBIEN DE FOIS IL Y A DES NOMBRES PAIRS


    Créer une fonction qui prend en paramètre un tableau de nombres 
    et qui retourne combien de nombres pairs sont présents

    // EN JS
    function compterPair (tabNombre)
    {
        // AJOUTER LE CODE MANQUANT

        return compteur;
    }

    // TESTER AVEC 
    console.log(compterPair([ 1, 2, 3, 4 ]));                   // 2 
    console.log(compterPair([ 51, 62, 71, 81, 10, 200 ]));      // 3

### CONCATENER LES TEXTES DANS UN TABLEAU

    Créer une fonction qui prend en paramètre un tableau de lettres
    et qui retourne un texte qui contient toutes les lettres 
    mais séparées par une virgule
    (attention: pas de virgule au début ni à la fin)

    // EN JS
    function concatenerTexte (tabLettre)
    {
        // AJOUTER LE CODE MANQUANT

        return texteFinal;
    }

    // TESTER AVEC 
    console.log(concatenerTexte([ 'a', 'b', 'c', 'd' ]));   // 'a,b,c,d' 
    console.log(concatenerTexte([ 'i', 'j', 'k' ]));        // 'i,j,k'


### CALCULER LES CREDITS ET LES DEBITS

    Créer une fonction qui prend en paramètre un tableau de nombre positifs et négatifs
    et qui retourne un objet avec 2 propriétés: 'credit' et 'debit' 
    (En PHP, on retournera un tableau associatif) 

    // EN JS
    function calculerBilan (tabNombre)
    {
        // AJOUTER LE CODE MANQUANT

        return objetResultat;
    }

    // TESTER AVEC 
    console.log(calculerBilan([ 1, 2, -3, 4 ]));          // { 'credit': 7, 'debit': -3} 
    console.log(calculerBilan([ 100, -20, -300, 40 ]));   // { 'credit': 140, 'debit': -320 }


### CALCULER LE TOTAL D'UN PANIER D'ACHAT

    Créer une fonction qui prend en paramètre 2 tableaux de nombres
    (qui ont le même nombre d'éléments)
    et qui retourne le prix total du panier 

    // EN JS
    function calculerPanier (tabQuantite, tabPrixUnitaire)
    {
        // AJOUTER LE CODE MANQUANT

        return prixTotal;
    }

    // TESTER AVEC 
    console.log(calculerPanier(
                    [ 1, 2, 3, 4 ], 
                    [ 10, 12, 13, 14]));
    // prixTotal = 129

    console.log(calculerPanier(
                    [ 3, 2, 1 ], 
                    [ 5, 6, 7]));
    // prixTotal = 34


### DISTRIBUTEUR DE BILLETS

    // CREER UNE FONCTION QUI PREND EN PARAMETRE UN NOMBRE
    // montant
    // ET QUI RETOURNE UN TEXTE DES BILLETS A DISTRIBUER
    // LES BILLETS DISPONIBLES SONT 200, 100, 50, 20, 10, 5
    // ON DISTRIBUERA LE MOINS DE BILLETS POSSIBLE

    function distribuerBillet(montant)
    {
        // AJOUTER LE CODE MANQUANT

        return texteBillet;
    }


    // TESTS
    console.log(distribuerBillet(235));
    /*

    ON DEVRAIT OBTENIR LE TEXTE SUIVANT

    1x200, 3x10, 1x5

    */


    console.log(distribuerBillet(670));
    /*

    ON DEVRAIT OBTENIR LE TEXTE SUIVANT

    3x200, 1x50, 1x20

    */


## DESSINER UN DAMIER

    // CREER UNE FONCTION QUI PREND EN PARAMETRE UN NOMBRE
    // largeur
    // ET QUI RENVOIE UN DAMIER EN TEXTE

    function dessinerDamier(largeur)
    {
        // AJOUTER LE CODE MANQUANT

        return texteDamier;
    }


    // TESTS
    console.log(dessinerDamier(3));
    /*

    ON DEVRAIT OBTENIR LE TEXTE SUIVANT

    X0X
    0X0
    X0X

    */


    console.log(dessinerDamier(4));
    /*

    ON DEVRAIT OBTENIR LE TEXTE SUIVANT

    X0X0
    0X0X
    X0X0
    0X0X

    */

    console.log(dessinerDamier(5));
    /*

    ON DEVRAIT OBTENIR LE TEXTE SUIVANT

    X0X0X
    0X0X0
    X0X0X
    0X0X0
    X0X0X

    */

## EXO JS : CREER UNE CALCULATRICE

    CREER UNE PAGE QUI PROPOSE UNE CALCULATRICE
    POUR EFFECTUER UN CALCUL ENTRE 2 NOMBRES

    CHAQUE CHIFFRE EST UN BOUTON

    [0][1][2][3][4][5][6][7][8][9]

    IL Y A UN CHAMP INPUT QUI AFFICHE LE NOMBRE
    FORME A PARTIR DES CHIFFRES

    [14567]

    IL Y A DES BOUTONS POUR LES OPERATIONS [+][-][x][/]
    * APPUYER SUR LE BOUTON D'UNE OPERATION PERMET DE FINIR LE PREMIER NOMBRE ET PASSER AU DEUXIEME NOMBRE

    ET IL Y A UN BOUTON [=] POUR LANCER LE CALCUL ENTRE LES 2 NOMBRES
    ON AFFICHERA LE RESULTAT

    * ON PEUT PRESENTER L'ENSEMBLE SOUS CE LAYOUT

    [NOMBRE____]
    [7][8][9]
    [4][5][6][/]
    [1][2][3][*]
    [0][=][-][+]



### EXO PHP ET SQL : CONSTRUIRE UNE REQUETE SQL DELETE

    // Créer une fonction qui prend en paramètre 
    // $nomTable        LE NOM DE LA TABLE SQL
    // $id              VALEUR DE LA COLONNE id A EFFACER


    function creerDeleteSQL ($nomTable, $id)
    {
        // AJOUTER LE CODE MANQUANT

        return $requeteSQLPreparee;
    }

    $requeteSQLPreparee = creerDeleteSQL("contact", 5);

    echo "<pre>$requeteSQLPreparee</pre>";
    /*
    ON DEVRAIT OBTENIR LE TEXTE SUIVANT:

    DELETE FROM contact
    WHERE id = 5

    */


### EXO PHP ET SQL : CONSTRUIRE UNE REQUETE SQL INSERT

    // Créer une fonction qui prend en paramètre 
    // $nomTable        LE NOM DE LA TABLE SQL
    // $tabAssoColVal   UN TABLEAU ASSOCIATIF


    function creerInsertSQL ($nomTable, $tabAssoColVal)
    {
        // AJOUTER LE CODE MANQUANT

        return $requeteSQLPreparee;
    }

    $requeteSQLPreparee = creerInsertSQL("newsletter", [ "nom" => "julie", "email" => "julie@nomail.me" ]);

    echo "<pre>$requeteSQLPreparee</pre>";
    /*
    ON DEVRAIT OBTENIR

    INSERT INTO newsletter
    ( nom, email )
    VALUES
    ( :nom, :email )


    // ATTENTION: 
    // LES VALEURS DU TABLEAU ASSOCIATIF NE SONT PAS UTILISEES
    // ON MET DES JETONS (TOKENS) A LA PLACE DES VALEURS
    // SEULS LES CLES DU TABLEAU ASSOCIATIF SERVENT...

    */

### EXO PHP ET SQL : CONSTRUIRE UNE REQUETE SQL UPDATE

    // Créer une fonction qui prend en paramètre 
    // $nomTable        LE NOM DE LA TABLE SQL
    // $tabAssoColVal   UN TABLEAU ASSOCIATIF


    function creerUpdateSQL ($nomTable, $tabAssoColVal)
    {
        // AJOUTER LE CODE MANQUANT

        return $requeteSQLPreparee;
    }

    $requeteSQLPreparee = creerUpdateSQL("newsletter", [ "nom" => "julie", "email" => "julie@nomail.me" ]);

    echo "<pre>$requeteSQLPreparee</pre>";
    /*
    ON DEVRAIT OBTENIR

    UPDATE newsletter
    SET
    nom = :nom,
    email = :email
    WHERE 
    id = :id

    // ATTENTION: 
    // LES VALEURS DU TABLEAU ASSOCIATIF NE SONT PAS UTILISEES
    // ON MET DES JETONS (TOKENS) A LA PLACE DES VALEURS
    // SEULS LES CLES DU TABLEAU ASSOCIATIF SERVENT...

    */

