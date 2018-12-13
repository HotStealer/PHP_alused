<?php
// tingimuslaused
// if(tingimus){
// tegevused, mis toimuvad kui tingimus kehtib
// }else {
// tegevused, mis toimuvad kui tingimus ei kehti
// }
echo '<h4>Tingimuslaused</h4>';
$arv = rand(0,100); // juhuslik täisarv vahemikus 0-100
$varv = '';
if ($arv >= 0 and $arv < 25){
    // roheline
    $varv = 'green';
}else if ($arv >= 25 and $arv <50){
    // punane
    $varv = 'red';
}else if ($arv >= 50 and $arv <75){
    // sinine
    $varv = 'blue';
}else if ($arv >= 75 and $arv <101){
    // kollane
    $varv = 'yellow';
}
echo '<p style="color:'.$varv.'">'.$arv.'</p>';
