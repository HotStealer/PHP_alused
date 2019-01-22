<?php
$tekst = 'Happiness in intelligent people is the rarest thing I know.';
$otsitav = 'in';
$nihe = 0;
while($leia_tekstist = strpos($tekst,$otsitav,$nihe)){
    echo $leia_tekstist.'<br>';
    $nihe = $leia_tekstist+strlen($otsitav);
}

