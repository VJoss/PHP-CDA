<?php
$tableau = [8,1,35,22,18,42,53,11,19];
$contenantT = 0;
$trier=true;
$j=0;

$longueurTableau = count($tableau);
while ($trier){
    $trier=false;

    for ($i=$longueurTableau-1; $i>$j; $i--){
        if($tableau[$i]<$tableau[$i-1]){
            $contenantT=$tableau[$i-1];
            $tableau[$i-1]=$tableau[$i];
            $tableau[$i]=$contenantT;
            $trier=true;
        
        
    }

}
$j++;

}
var_dump($tableau);
var_dump($i);
?>