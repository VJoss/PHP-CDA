<?php
function calculerMonnaieARendre($totalAPayer, $paiementDuClient, $fondDeCaisse)
{
    $monnaieARendre = $paiementDuClient - $totalAPayer;
    $rendu = array();

    foreach ($fondDeCaisse as $valeur => $quantite) {
        if ($quantite > 0) {
            while ($monnaieARendre >= $valeur && ($quantite > 0)) {
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

    if ($monnaieARendre == 0) {
        return $rendu;
    } else {
        return false;
    }
}
function TotaleRendu($rendu){
    $sommeTotal = 0;
    
    foreach ($rendu as $valeur => $quantite) {
        if (is_numeric($valeur)) {
            $sommeTotal += $valeur*$quantite;
        }
    }
    return $sommeTotal;
    }

function calculerMonnaieEncaisse($paiementDuClient, $fondDeCaisse)
{
    foreach ($fondDeCaisse as $valeur => $quantite) {
        if ($paiementDuClient > 0) {
            while ($paiementDuClient >= $valeur) {
                $paiementDuClient -= $valeur;
                if (array_key_exists($valeur, $fondDeCaisse)) {
                    $fondDeCaisse[$valeur] += 1;
                } else {
                    $fondDeCaisse[$valeur] = 1;
                }   
            }
        }
    }
    if ($paiementDuClient == 0) {
        return $fondDeCaisse;
    } else {
        return false;
    }
}
function TotalFondDeCaisse($fondDeCaisse){
$sommeTotal = 0;

foreach ($fondDeCaisse as $valeur => $quantite) {
    if (is_numeric($valeur)) {
        $sommeTotal += $valeur*$quantite;
    }
}
return $sommeTotal;
}