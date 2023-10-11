<?php
$word1="charle";
$word2="joss";
$word3="Bonjour";
$change="";
$trier=true;
$trier2=true;
$same=false;
$wordBeforeWord2=true;
$i=0;
$lastIndexShortWord= wordLengthShort($word1,$word2)-1;
$lastIndexShortWord2= wordLengthShort($word2,$word3)-1;



function wordLengthShort(string $mot1,string $mot2){// retourne le mot le plus court
    $wordLength= strlen($mot1);
    $wordLength2= strlen($mot2);

    if ($wordLength<$wordLength2) {
        return $wordLength;
    }else{
        return $wordLength2;
    }
}
while($trier){
$trier=false;
    for($i=0;$i<=$lastIndexShortWord;$i++){// ici determine le mot le plus proche de A
        if($word1[$i]==$word2[$i]){
            }elseif($word1[$i]>$word2[$i]){
          return $word2;
          $trier=false;
    }
}
}
while($trier2){
    $trier2=false;

    for($i=0;$i<=$lastIndexShortWord2;$i++){   // ici determine le mot le plus proche de A
        if($word2[$i]==$word3[$i]){   
            }elseif($word2[$i]>$word3[$i]){
      return $word3;
      $trier2=true;
      if($trier2==true){
        echo("Les deux dernier mots $word2 et $word3 ne sont pas ranger dans l\'ordre alphabétique.")
      }
        }
    }
}






?>