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
    function trouverMin3 (tabNombre)
    {
        // AJOUTER LE CODE MANQUANT

        return min;
    }

    // TESTER AVEC 
    console.log(trouverMin3([ 32, 5, 1, 2 ]));      // 1
    console.log(trouverMin3([ 12, 11, 33, 78 ]));   // 11


### PRIX TTC

    Créer une fonction qui prend en paramètre 2 paramètres

    // EN JS
    function calculerPrixTTC (prixHT, tauxTVA)
    {
        // AJOUTER LE CODE MANQUANT

        return prixTTC;
    }

    // TESTER AVEC 
    console.log(calculerPrixTTC(100, 20));      // 120
    console.log(calculerPrixTTC(200, 10));      // 220



