<?php
$word1 = "charle";
$word2 = "joss";
$word3 = "Bonjour";
$change = "";
$trier = true;
$trier2 = true;
$same = false;
$wordBeforeWord2 = true;
$word2BeforeWord3 = true;
$i = 0;


function wordLengthShort(string $mot1, string $mot2)
{ // retourne le mot le plus court
    $wordLength = strlen($mot1);
    $wordLength2 = strlen($mot2);

    if ($wordLength < $wordLength2) {
        return $wordLength;
    } else {
        return $wordLength2;
    }
}



$wordLengthShortO = wordLengthShort($word1, $word2);
$lastIndexWordShort = $wordLengthShortO - 1;

while ($same && $i <= $lastIndexWordShort) {
    if ($word1[$i] != $word2[$i]) {
        $same = true;
    }
    if ($word1[$i] > $word2[$i]) {
        $wordBeforeWord2 = false;
    } else {
        $i++;
    }
}
return $wordBeforeWord2;

if ($wordBeforeWord2 == false) {
    $word2BeforeWord3 = wordLengthShort($word2, $word3);
    if ($word2BeforeWord3 == false) {
        echo "Félicitation c\'est dans l\'ordre !";
    } else {
        echo "Ils ne sont pas dans l\'ordre !";
    }
} else {
    echo "Ils ne sont pas dans l\'ordre !";
}


$wordLengthShortO1 = wordLengthShort($word2, $word3);
$lastIndexWordShort2 = $wordLengthShortO1 - 1;

while ($same && $i <= $lastIndexWordShort2) {
    if ($word2[$i] != $word3[$i]) {
        $same = true;
    }
    if ($word2[$i] > $word3[$i]) {
        $wordBeforeWord3 = false;
    } else {
        $i++;
    }
}
return $wordBeforeWord3;
