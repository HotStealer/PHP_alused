<?php
/**
 * function funtksiooniNimi($param1,$param2,..,$paramN){
 * teevused, mis toimuvad funktsiooni sees
 * }
 */

function numbriKordumine($arv, $kontrollNumber){
    echo 'Arv on '.$arv.'<br>';
    $numberKokku = 0;
    while($arv != 0) {
        $number = $arv % 10;
        if($number == $kontrollNumber) {
            $numberKokku = $numberKokku +1;
        }
        $arv = $arv / 10;
        settype($arv, 'int');
    }
    echo 'Number '.$kontrollNumber.' esineb antud arvus '.$numberKokku.' korda<br>';
}
numbriKordumine(442158755745,5);
numbriKordumine(477758753745,7);
