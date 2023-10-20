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
if ($resultat !== false) {
$totaleRenduClient = TotaleRendu($resultat);}

elseif ($paiementDuClient < $totalAPayer) {;
    echo " ";
}

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

$totaleEnCaissebis = TotalFondDeCaissebis($test);
echo "La valeur totale du fond de caisse est de : ";
echo $totaleEnCaissebis."€<br>";

$entreEnCaissebis = calculerMonnaieEncaissebis($paiementDuClient, $test);
if ($entreEnCaissebis !== false) {
    echo "<br>Le fond de caisse actuelle est :<br>";
    foreach ($entreEnCaissebis as $valeur => $quantite) {

        echo $valeur. $quantite;
    }
}
$convertionValeur = convertionTableau($test);