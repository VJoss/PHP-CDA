<?php
require "ConstanteEtVariable.php";
require "fonctionCalculeMonnaie.php";

$resultat = calculerMonnaieARendre($totalAPayer, $paiementDuClient, $fondDeCaisse);

if ($resultat !== false) {
    echo "Monnaie rendue :<br>";
    foreach ($resultat as $valeur => $quantite) {
        echo number_format($valeur / 100, 2) . " € x $quantite<br>";
    }
} elseif ($paiementDuClient < $totalAPayer) {;
    echo "Votre paiement n'est pas suffisant.<br>Veuillez complété la somme manquante de : " . number_format($monnaieManquante / 100, 2) . "€<br><br>";
} else {
    echo "Impossible de rendre la monnaie avec le fond de caisse actuel.<br><br>";
}

$totaleRenduClient = TotaleRendu($resultat);
echo "La valeur totale rendu est de : ";
echo number_format($totaleRenduClient / 100, 2)."€<br>";

$entreEnCaisse = calculerMonnaieEncaisse($paiementDuClient, $fondDeCaisse);
if ($entreEnCaisse !== false) {
    echo "<br>Le fond de caisse actuelle est :<br>";
    foreach ($entreEnCaisse as $valeur => $quantite) {
        echo number_format($valeur / 100, 2) . "€ x $quantite<br>";
    }
}


$totaleEnCaisse = TotalFondDeCaisse($entreEnCaisse);
echo "La valeur totale du fond de caisse est de : ";
echo number_format($totaleEnCaisse / 100, 2)."€<br>";

$echangeMonnayeur = calculerMonnayeur($monnayeur,$fondDeCaisse);
foreach ($echangeMonnayeur as $valeur => $quantite) {
    echo number_format($valeur / 100, 2) . "€ x $quantite<br>";
}