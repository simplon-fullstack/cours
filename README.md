# cours

cours et exercices

## JS ET PHP

## FONCTIONS EN JS

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


## FONCTIONS EN PHP

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
    console.log(trouverMin3([ 32, 5, 1, 2 ]));      // 1
    console.log(trouverMin3([ 12, 11, 33, 78 ]));   // 11


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


