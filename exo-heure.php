<?php

echo "<h1>heure du serveur</h1>";
echo date("H:i:s");

// https://www.php.net/manual/fr/function.date-default-timezone-set.php

echo "<h1>heure America/Los_Angeles</h1>";
date_default_timezone_set('America/Los_Angeles');

echo date("H:i:s");

echo "<h1>heure Europe/Paris</h1>";
date_default_timezone_set('Europe/Paris');

echo date("H:i:s");

// la fonction qui configure les options de mon projet PHP
function configurerProjet ($mode="DEV")
{
    // https://www.php.net/manual/fr/function.date-default-timezone-set.php
    date_default_timezone_set('Europe/Paris');

    if ($mode == "DEV")
    {
        // debug
        // https://www.php.net/manual/fr/function.error-reporting.php
        error_reporting(E_ALL);
        // https://www.php.net/manual/fr/errorfunc.configuration.php
        ini_set('display_errors', '1');

    }

    if ($mode == "PROD")
    {
        // debug
        // https://www.php.net/manual/fr/function.error-reporting.php
        error_reporting(0);
        // https://www.php.net/manual/fr/errorfunc.configuration.php
        ini_set('display_errors', '0');
    }


}

// configurerProjet("PROD");
configurerProjet();

// EN MODE DEV, ON VERRA LES MESSAGES D'ERREURS
// Fatal error: Uncaught Error: Call to undefined function kjsfhgjsd() 
kjsfhgjsd();

