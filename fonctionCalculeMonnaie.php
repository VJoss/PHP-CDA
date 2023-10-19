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


function calculerMonnayeur($monnayeur, $fondDeCaisse)
{
    $rendu = array();
    /*
    pour chaque valeur de mon fond de caisse qui possede une quantité si la quantité est inférieur a 1 alors pour chaque valeur de ma caisse  == a mon monnayeur 
    */
    foreach ($fondDeCaisse as $valeur => $quantite) {
        if ($quantite < 1 && $valeur==$monnayeur[$valeur]) {
            while ($valeur<5 ) {
                $fondDeCaisse[$valeur] += 1;
                $monnayeur[$valeur] -= 1;
            }
           }
            }
            return $fondDeCaisse;
        }