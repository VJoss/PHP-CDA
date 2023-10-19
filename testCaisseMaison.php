<?php
require "ConstanteEtVariable.php";
require "fonctionCalculeMonnaie.php";

$entreEnCaisse = calculerMonnaieEncaisse($paiementDuClient, $fondDeCaisse);
if ($entreEnCaisse !== false) {
    echo "Mon fond de caisse actuelle est :<br>";
    foreach ($entreEnCaisse as $valeur => $quantite) {
        echo number_format($valeur / 100, 2) . "€ x $quantite<br>";
    }
}

$resultat = calculerMonnaieARendre($totalAPayer, $paiementDuClient, $fondDeCaisse);

if ($resultat !== false) {
    echo "Monnaie rendue :<br>";
    foreach ($resultat as $valeur => $quantite) {
        echo number_format($valeur / 100, 2) . " € x $quantite<br>";
    }
} elseif ($paiementDuClient < $totalAPayer) {;
    echo "Votre paiement n'est pas suffisant.<br>Veuillez complété la somme manquante de : " . number_format($monnaieManquante / 100, 2) . "€<br><br>";
} else {
    echo "Impossible de rendre la monnaie avec le fond de caisse actuel.<br>";
}

