<?php
function calculerMonnaieARendre($totalAPayer, $paiementDuClient, $fondDeCaisse)
{
    $monnaieARendre = $paiementDuClient - $totalAPayer;
    $rendu = array();

    foreach ($fondDeCaisse as $valeur => $quantite) {
        if ($quantite > 0) {
            while ($monnaieARendre >= $valeur && $quantite > 0) {
                $monnaieARendre -= $valeur;
                if (array_key_exists($valeur, $rendu)) {
                    $rendu[$valeur] += 1;
                } else {
                    $rendu[$valeur] = 1;
                }
                $quantite--;
            }
        }
    }

    return ($monnaieARendre == 0) ? $rendu : false;
}

function calculerMonnaieEncaisse($totalAPayer, $paiementDuClient, $fondDeCaisse)
{
    foreach ($fondDeCaisse as $valeur => $quantite) {
        if ($paiementDuClient > 0) {
            while ($paiementDuClient >= $valeur && $quantite) {
                $paiementDuClient -= $valeur;
                if (array_key_exists($valeur, $fondDeCaisse)) {
                    $fondDeCaisse[$valeur] += 1;
                } else {
                    $fondDeCaisse[$valeur] = 1;
                }
                $quantite--;
            }
        }
    }
    return ($paiementDuClient == 0) ? $fondDeCaisse : false;
}
