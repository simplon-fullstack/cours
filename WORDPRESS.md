## INSTALLATION DE WORDPRESS

    https://wordpress.org/

    https://wordpress.org/download/

    * POUR TELECHARGER DIRECTEMENT LA VERSION ANGLAISE

    https://wordpress.org/latest.zip

    * SI ON VEUT DIRECTEMENT LA VERSION EN FRANCAIS

    https://fr.wordpress.org/download/

    * POUR TELECHARGER DIRECTEMENT EN FRANCAIS

    https://fr.wordpress.org/latest-fr_FR.zip


    * ET UNE FOIS LE FICHIER zip TELECHARGE 
    * DEZIPPER LE FICHIER
    * => DOIT CREER UN DOSSIER wordpress/

    * RENOMMER CE DOSSIER wordpress3/
    * ET LE DEPLACER DANS LE DOSSIER QUI CONTIENT NOS PROJETS WEB 
    * (POUR MOI C:\xampp\htdocs/simplon/)

    * ALLER DANS PHPMYADMIN
    * (DEMARRER LE SERVEUR WEB)
    * ET ALLER DANS LE NAVIGATEUR SUR L'URL

    http://localhost/phpmyadmin/

    * ET CREER UNE DATABASE wordpress3 
        AVEC LE CHARSET ut8mb4_general_ci

    * ENSUITE ALLER DANS LE NAVIGATEUR SUR LE DOSSIER wordpress3

    http://localhost:81/simplon/wordpress3/


    ET PASSER LES ETAPES JUSQU'AU FORMULAIRE POUR LA CONNEXION AVEC LA BASE DE DONNEES

    * REMPLIR LES INFOS
    * identifiant: root
    * mot de passe: (vide ou root) (suivant votre serveur web)

## CREER SON THEME WORDPRESS

    * CREER UN DOSSIER 
            wp-content/themes/montheme/
    * ET AJOUTER LE FICHIER 
            wp-content/themes/montheme/style.css
    * ET AJOUTER LE FICHIER 
            wp-content/themes/montheme/index.php

    CA Y'EST ON A CREE UN THEME WORDPRESS ;-p
    ET ON PEUT L'ACTIVER

## CODER SON TEMPLATE index.php

```php
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MON SITE WORDPRESS</title>
    <!-- ON LAISSE WORDPRESS AJOUTER DU CODE ICI -->
    <!-- WP CREE LE CODE CSS DU BANDEAU NOIR -->
    <!-- https://codex.wordpress.org/Function_Reference/wp_head -->
    <?php wp_head() ?>
</head>
<body>
    <header>
        <h1>MON SITE WORDPRESS</h1>
    </header>
    <main>
        <section>
            <h3>TITRE3</h3>
            <p>un peu de texte</p>
        </section>
    </main>
    <footer>
        <p>tous droits réservés - 2019</p>
    </footer>

    <!-- ON LAISSE WORDPRESS AJOUTER DU CODE ICI -->
    <!-- WP CREE LE CODE HTML ET JS DU BANDEAU NOIR -->
    <!-- https://codex.wordpress.org/Function_Reference/wp_footer -->
    <?php wp_footer() ?>

</body>
</html>
```


## AJOUTER LE MENU

    * 2 ETAPES
    * ON DOIT DECLARER QUE NOTRE THEME GERE LES MENUS
        CREER UN FICHIER 
        wp-content/themes/montheme/functions.php

    * ET ON DOIT AJOUTER LE CODE QUI VA AFFICHER LE MENU DANS LA PAGE

## BOUCLES POUR AFFICHER LE CONTENU CREE DANS LE BACK-OFFICE

    https://codex.wordpress.org/fr:La_Boucle

    * EXEMPLE DE CODE PHP WORDPRESS POUR AJOUTER UNE BOUCLE

    https://codex.wordpress.org/fr:La_Boucle_En_Action


## AJOUTER LE LIEN VERS LE CSS

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">


## EXERCICE: INTEGRER UNE MAQUETTE HTML ET CSS COMME THEME WORDPRESS

    * PRENDRE UNE MAQUETTE HTML, CSS ET JS
    * EXEMPLE SUR LE SITE
    * https://html5up.net

    * ET ENSUITE INTEGRER CES CODES DANS montheme/


