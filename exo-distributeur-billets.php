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
        <h3>DISTRIBUTEUR DE BILLETS</h3>
        <form class="distributeur" action="">
            <input type="number" name="montant" placeholder="entrez le montant désiré" required>
            <button type="submit">RETIRER MES BILLETS</button>
            <div class="listeBillet">
            <!-- ICI ON AFFICHERA LES BILLETS -->
            </div>
        </form>
    </section>
    <script>
// QUAND LE VISITEUR CLIQUE SUR LE BOUTON POUR ENVOYER LE FORMULAIRE
// ALORS JE BLOQUE LE FORMULAIRE
// ET JE RECUPERE LE MONTANT DESIRE
// ET JE CALCULE LE NOMBRE DE BILLETS A DISTRIBUER
// ET J'AFFICHE LES BILLETS AU VISITEUR

// ON VA UTILISER JS CAR
// => ON A BESOIN DE RECUPERER LE MONTANT ENTRE DANS LE CHAMP input
// => ON A BESOIN DE FAIRE DES CALCULS
// => ON A BESOIN DE RAJOUTER DU HTML DANS LA PAGE

// PRENDRE LE CONTROLE SUR L'ENVOI DU FORMULAIRE
// J'AI BESOIN D'AGIR EN JS SUR UNE BALISE
// => J'AI BESOIN D'UNE VARIABLE JS QUI REPRESENTE LA BALISE
var baliseForm = document.querySelector('form.distributeur');
// JE VEUX AJOUTER MON CODE SUR UNE ACTION DU VISITEUR

console.log('ce code est activé au chargement de la page');

// avantage d'une fonction
// je range mon code pour pouvoir l'activer plus tard
function activerMonCode (event) {
    // instruction1 
    // instruction2
    event.preventDefault(); // permet de bloquer l'envoi du formulaire

    console.log('le code est activé');

    // récupérer le montant demandé
    // j'ai besoin de manipuler la balise input
    var baliseInput = document.querySelector('.distributeur input[name=montant]');
    // je récupère le montant saisi par le visiteur
    var montant = baliseInput.value; 
    // debug
    console.log('montant désiré:' + montant);

    // maintenant, je sais combien il faut distribuer en tout
    // comment je choisis le nombre de billets
    // 200, 100, 50, 20, 10, 5
    var tableauBillet   = [ 200, 100,  50, 20,  10, 5 ];
    var tableauQuantite = [ 0,     0,   0,  0,   0, 0 ];
    // dans un cerveau humain (souvenez de vos parties de Monopoly)
    // comment on distribue les billets
    // 360
    // 1x200 + 1x100 + 1x50 + 0x20 + 1x10  0x5
    // je parcours le tableau du premier au dernier élément
    var baliseListeBillet = document.querySelector('.listeBillet');
    // on efface la liste précédente
    baliseListeBillet.innerHTML = '';

    // lire la documentation pour connaitre les parametres fournis par JS
    // https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/forEach#Param%C3%A8tres
    tableauBillet.forEach(function(billet, indice){
        // debug
        console.log(billet);
        var reste = montant % billet;
        var quantite = (montant - reste) / billet;
        
        console.log('ON VA DONNER: ' + montant + ' = ' + quantite + 'x' + billet);
        // le montant devient le reste pour la prochaine itération (étape)
        montant = reste;

        // montant
        // 360     = 1 * 200 + 160
        // 160     = 1 * 100 + 60
        // 60      = 1 * 50 + 10
        // 10      = 0 * 20 + 10
        // 10      = 1 * 10 + 0
        // 5       = 0 * 5  + 0
        // étapes => algorithme à coder

        // comment je calcule le nombre de billets à distribuer pour chaque type de billet
        
        // montant                     = quantite * billet + reste
        // montant - reste             = quantite * billet
        // (montant - reste ) / billet = quantite

        // quantite = (montant - reste ) / billet
        
        // SI ON VEUT AFFICHER lES BILLETS SOUS LE BOUTON
        // AJOUTER AUTANT DE BILLETS QUE NECESSAIRE
        for(nbBillet=0; nbBillet<quantite; nbBillet++)
        {
            // ajouter une balise img avec src pour afficher le bon billet
            baliseListeBillet.insertAdjacentHTML('beforeend', '<img src="billets/' + billet + 'euros.jpg">');
        }
    });

};

// on veut activer le code dans activerMonCode
// quand le visiteur va envoyer le formulaire
// la fonction ve recevoir des paramètres de JS
// => IL FAUT LIRE LA DOCUMENTATION
// => TODO...
baliseForm.addEventListener('submit', activerMonCode);

// QUAND ON CREE NOS FONCTIONS
// COMMENT DETERMINER LES PARAMETRES ?
// etape: déclaration de la fonction
// si on veut obtenir un résultat différent à chaque appel de la fonction
// => fournir des paramètres en entrée
// BOITE: fonction
// * ENTREES: les paramètres entre les ()
// * SORTIE: return resultat;
function produireResultat (param1, param2)
{

    // sortie
    return resultat;
}

// etape: appelle la fonction
$resultat1 = produireResultat(100, 20);

// ... 
$resultat2 = produireResultat(120, 5.5);




    </script>
</body>
</html>