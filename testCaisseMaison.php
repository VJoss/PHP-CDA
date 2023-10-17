<?php
$fondDeCaisse = array(
    50000 => 1,
    20000 => 1,
    10000 => 0,
    5000 => 2,
    2000 => 3,
    1000 => 1,
    500 => 10,
    200 => 20,
    100 => 4,
    0500 => 2,
    0200 => 20,
    0100 => 15,
    005 => 23,
    002 => 14,
    001 => 30
);
$totalAPayer = 13549;
$paiementDuClient = 32578;
require "fonctionCalculeMonnaie.php";

$resultat = calculerMonnaieARendre($totalAPayer, $paiementDuClient, $fondDeCaisse);

if ($resultat !== false) {
    echo "Monnaie rendue :<br>";
    foreach ($resultat as $valeur => $quantite) {
        echo number_format($valeur / 100, 2) . " € x $quantite<br>";
    }
} else {
    echo "Impossible de rendre la monnaie avec le fond de caisse actuel.";
}
