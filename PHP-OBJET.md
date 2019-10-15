## COURS PROGRAMMATION ORIENTE OBJET

    DEPUIS LES ANNEES 90, DEVENU LE STANDARD DE DEVELOPPEMENT DANS LES ENTREPRISES.

    => PERMET DE GERER LE CODE DE TRES GRANDS PROJETS

    => 1.000 PETITS PROJETS (UN SEUL DEV)
    => 10.000 PROJET MOYEN  (CODE GERABLE PAR UN SEUL DEV)
    => 100.000              (EN EQUIPE)
    => 1.000.000            (EN EQUIPE)

    => PROGRAMMATION FONCTIONNELLE. COOL < 10.000
    => > 100.000 AU DELA DE LA PROGRAMMATION FONCTIONNELLE


    // ...
    // ligne 100

    // la fonction peut accepter des parametres en entrée
    function faireTache1 (param1, param2)
    {
        // ligne1
        // ligne2

        // sortie
        return $resultat;
    }

    function faireTache2 (param1)
    {
        // ligne 10
        // ligne 11

        // sortie
        return $resultat;
    }


    // si dans une fonction je range une centaine de lignes de code
    // si j'ai un projet à 100.000 lignes de code
    // j'aurai 1.000 de fonctions
    // => même problématique de rangement avec les fonctions !
    // => ON RANGER NOS FONCTIONS DANS DES BOITES QUI SONT LES CLASSES
    // EN PRATIQUE UNE CLASSE DEVRAIT CONTENIR UNE DIZAINE DE FONCTIONS

    // => PROGRAMMATION ORIENTE OBJET

    // ON PEUT TOUJOURS AVOIR DES FONCTIONS
    // ETAPE1: DEFINITION/DECLARATION DE LA FONCTION
    function faireTacheF1 ()
    {
        // code en attente
    }
    // ETAPE2: APPEL A LA FONCTION
    faireTacheF1();    // activer le code dans la fonction faireTacheF1


    // VOCABULAIRE: 
    // ON APPELLE METHODE UNE FONCTION QUI EST RANGEE DANS UNE CLASSE

    // class EN ANGLAIS => groupe EN FRANCAIS
    // ETAPE1: DEFINITION/DECLARATION DE LA CLASSE
    class MaClasse1
    {
        // fonction 1 => méthodes
        function faireTache1 ()
        {
            // code en attente
        }

        // fonction 2
        function faireTache2 ()
        {

        }

    }

    // ETAPE2: ON CREE UN OBJET A PARTIR DE LA CLASSE
    // new OPERATEUR D'INSTANCIATION
    $objet = new MaClasse1;

    // ETAPE3: ON APPELLE LA METHODE EN PASSANT PAR L'OBJET
    $objet -> faireTache1();


    class MaClasse2
    {
        // fonction 10
        function faireTache10 ()
        {

        }

        // fonction 11
        function faireTache11 ()
        {

        }

    }

    // TEASER: DANS PHP
    // SI ON A BEAUCOUP DE CLASSES
    // IL FAUT LES RANGER DANS DES BOITES
    // => namespace EN PHP

    namespace MaBoite
    {
        class MaClasse1
        {
            function faireT1 ()
            {

            }

            function faireT2 ()
            {

            }

        }

        class MaClasse2
        {
            function faireT21 ()
            {

            }

            function faireT22 ()
            {

            }

        }

    }




## EXEMPLES DE CLASSES

    // SI ON COMPARE AVEC LE MONDE REEL
    // UNE CLASSE EST COMME UN METIER
    class Pompier
    {
        // LES METHODES REPRESENTENT LE SAVOIR FAIRE DU METIER
        function eteindreFeu()
        {

        }

        function reanimer ($victime)
        {

        }
    }

    // SI J'AI BESOIN DE REANIMER UNE VICTIME
    // $florence EST UN OBJET DE LA CLASSE Pompier
    $florence = new Pompier;
    $florence->reanimer("rebeca");


    class Veterinaire
    {
        // METHODES
        function soigner ($animal)
        {

        }

        function vacciner ($animal)
        {

        }
    }

    $myriam = new Veterinaire;
    $myriam->soigner("chat");


    // PROGRAMMATION FONCTIONNELLE
    // => PROGRAMMATION IMPERATIVE
    // VERBE COMPLEMENT
    // exemple: VAS TE COUCHER
    // function faire (param1, param2) {}
    // => faire ("quelque", "chose");

    // AVEC LA PROGRAMMATION ORIENTEE OBJET
    class MaClasse1 
    {
        // METHODE
        function faireTravail($param1, $param2)
        {

        }
    }

    // création d'un objet
    $objet = new MaClasse1;
    $objet->faireTravail("coder", "poo");
    // OBJET METHODE PARAMETRES
    // SUJET VERBE COMPLEMENT


    // SUR UN PROJET WEB
    // PERSONA CLIENT
    // ANALYSE DES BESOINS
    //      Le site doit afficher un formulaire
    // IL FAUT ENSUITE CODER LES FONCTIONNALITES 
    // DEMANDEES PAR LE CLIENT
    //      $site -> afficher ("formulaire");

    // PERMET DE CODER AVEC DES LIGNES PLUS "NATURELLES"
    // SUJET VERBE COMPLEMENTS
    // ASTUCES:
    // OBJET:       DONNER DES NOMS COMMUNS
    // METHODE:     UTILISER UN VERBE
    // PARAMETRES:  INFOS COMPLEMENTAIRES POUR POUVOIR REALISER L'ACTION


## EXEMPLES DE CLASSES ET DE METHODES


    class Professeur
    {
        // METHODES
        function enseigner ($matiere)
        {

        }

        function corriger ($examen)
        {

        }
    }

    // CHAQUE OBJET PEUT ACTIVER LES METHODES DE SA CLASSE
    $long = new Professeur;
    $long -> enseigner("PHP");

    // CHAQUE OBJET PEUT ACTIVER LES METHODES DE SA CLASSE
    $nico = new Professeur;
    $nico -> enseigner("JS");
    $nico -> corriger("evaluation1");
    $nico -> corriger("evaluation2");


    // CLASSE
    class RobotCuisine
    {
        // METHODES
        function raper ($legume)
        {

        }

        function monterBlancNeige ()
        {

        }
    }

    // OBJET
    $thermomix = new RobotCuisine;
    $thermomix -> monterBlancNeige();


## MARDI 15/10: PROGRAMMATION ORIENTE OBJET (SUITE)

    classe
    objet
    methodes (fonctions rangées dans des classes)


        POUR FAIRE DE LA PROGRAMMATION ORIENTE OBJET
        ON COMMENCE PAR CREER UNE CLASSE
        ET ON DECLARE SES METHODES DANS LA CLASSE

    // DECLARATION => LE CODE EST EN ATTENTE
    class MaClasse
    {
        // DECLARATIONS DES METHODES
        function faireTravailA ()
        {
            // ECRIRE VOTRE CODE ICI...
        }    
    }    

    // POUR EXECUTER LE CODE
    // AVEC LA POO
    // ON DOIT D'ABORD CREER UN OBJET
    // new OPERATEUR D'INSTANCIATION (VOCABULAIRE)
    $objet = new MaClasse;

    // ET ENSUITE JE PEUX UTILISER L'OBJET POUR ACTIVER MA METHODE
    // -> OPERATEUR D'ACCES (VOCABULAIRE)
    $objet -> faireTravailA();

    SUR CETTE BASE, ON VA AVOIR BEAUCOUP DE POSSIBILITES QUI VONT SE RAJOUTER 
    => CA VA ETRE PLUS COMPLEXE A MAITRISER
    => IL FAUT PRATIQUER POUR MIEUX COMPRENDRE

    PHP ORIENTE OBJET EST CONSTRUIT DE MANIERE "CLASSIQUE" 
    PAR RAPPORT AUX AUTRES LANGAGES ORIENTE OBJET
    (JAVA, Swift et Objective C, C++, C#, etc...)

    ATTENTION: JavaScript EST AUSSI UN LANGAGE ORIENTE OBJET
            MAIS UN PEU SPECIAL PAR RAPPORT AUX AUTRES

## COMMENT FAIRE DE LA POO EN PHP

    CRITERE SIMPLE: 
    SI ON RANGE NOTRE CODE DANS DES CLASSES ALORS C'EST DE LA POO

    AVANTAGE DE PHP: 
    LANGAGE MIXTE QUI PERMET DE FAIRE DU FONCTIONNEL 
    ET AUSSI DE L'OBJET MELANGES
    => CA PERMET DE CONTINUER A UTILISER DES ANCINES CODES
        ET DE LES PASSER PROGRESSIVEMENT EN ORIENTE OBJET

    AVEC LARAVEL: ILS ONT OPTE POUR L'APPROCHE PRATIQUE
        MIX ENTRE OBJET ET PAS OBJET

    DANS LES FRAMEWORKS PHP POPULAIRES
    * LARAVEL       https://laravel.com/
    * SYMFONY       https://symfony.com/
    * ZEND          https://framework.zend.com/

    PAR ORDRE DE POPULARITE ET AUSSI DE COMPLEXITE
    SYMFONY ET ZEND PRONENT LE TOUT POO

    TOUS CES FRAMEWORKS SONT MVC
    => SI ON UTILISE UN FRAMEWORK MVC 
        ALORS ON VA COMPRENDRE RAPIDEMENT LES AUTRES


## POURQUOI LARAVEL EST MOINS OBJET QUE SYMFONY ???

    class Pompier
    {
        // METHODES STATIC
        // ATTENTION: CE SONT DES METHODES DE CLASSE
        static function reanimer ()
        {
            // AJOUTER LE CODE ICI
        }

        // METHODES
        // CE SONT DES METHODES D'OBJET
        function eteindreFeu ()
        {
            // AJOUTER LE CODE ICI
        }

    }

    $nicolas = new Pompier;
    $nicolas -> eteindreFeu();

    // POUR ACTIVER UNE METHODE static
    // => JE N'AI PAS BESOIN DE CREER D'OBJET
    // IL FAUT DONNER LA CLASSE AVANT LE NOM DE LA METHODE
    // :: OPERATEUR DE RESOLUTION DE PORTEE
    // https://www.php.net/manual/fr/language.oop5.paamayim-nekudotayim.php
    Pompier::reanimer();

    // DANS LARAVEL
    // ON A LE FICHIER routes/web.php
    // POUR AJOUTER UNE NOUVELLE ROUTE, ON ECRIT
    // Route::view('/espace-membre', 'espace-membre');
    // => ON APPELLE LA METHODE STATIC view DANS LA CLASSE Route





## METHODES MAGIQUES EN PHP

    https://www.php.net/manual/fr/language.oop5.magic.php

    => C'EST LE COTE DIFFICILE DE LA POO
    => SI ON NE SAIT PAS CE QUE C'EST ON NE COMPREND LE CODE POO

## CONSTRUCTEUR __construct

    class Pompier
    {
        // METHODES
        // METHODE MAGIQUE => CONSTRUCTEUR
        // LE NOM DOIT ETRE __construct
        function __construct ()
        {
            // debug
            echo "<h1>__construct</h1>";
        }

        // METHODE MAGIQUE => DESTRUCTEUR
        // LE NOM DOIT ETRE __construct
        function __destruct ()
        {
            // debug
            echo "<h1>__destruct</h1>";
        }

    }

    echo "<h1>AVANT</h1>";
    $long = new Pompier; // DECLENCHE LA METHODE __construct
    echo "<h1>APRES</h1>";

    // SI ON COMPARE AVEC JS
    // C'EST UN PEU COMME LES EVENT LISTENERS ET LES CALLBACK
    // EVENEMENT => new
    // CALLBACK __construct


## METHODES CONSTRUCTEURS AVEC PARAMETRES


    class Garagiste
    {
        // METHODE MAGIQUE CONSTRUCTEUR
        // ON N'A PAS LE CHOIX SUR LE NOM DE LA METHODE __construct
        // MAIS ON PEUT CHOISIR LE NOMBRE DE PARAMETRES
        function __construct ($nom, $prenom)
        {
            // debug
            echo "<h1>Bonjour je m'appelle $prenom $nom ! Et je suis garagiste</h1>";
        }
    }

    // SI LA METHODE CONSTRUCTEUR DEMANDE DES PARAMETRES
    // ALORS IL FAUT LES FOURNIR QUAND ON FAIT LE new
    $victor = new Garagiste("Charlemagne", "victor");    
        // => PHP VA APPELER __construct("Charlemagne", "victor")






































