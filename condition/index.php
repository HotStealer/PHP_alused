<?php
// tingimuslaused
// if(tingimus){
// tegevused, mis toimuvad kui tingimus kehtib
// }else {
// tegevused, mis toimuvad kui tingimus ei kehti
// }
echo '<h4>Tingimuslaused</h4>';
$foor = 'roheline';

switch ($foor){
    case 'punane':
        echo '<p style="color:red">Seis!</p>';
        break;
    case 'kollane':
        echo '<p style="color:yellow">Tähelepanu!</p>';
        break;
    case 'roheline':
        echo '<p style="color:green">Läks!</p>';
        break;
    default:
        echo '<p>Foor ei tööta</p>';
        break;
}