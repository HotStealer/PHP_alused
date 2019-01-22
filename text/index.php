<?php
$tekst = 'Pai papa, pane paadile punased purjed peale';
$asendus = 'emme';
$otsitav = 'papa';
$nihe = 0;
$asendus_algus = strpos($tekst, $otsitav, $nihe);
$asenduse_markide_arv = strlen($otsitav);
echo substr_replace($tekst, $asendus, $asendus_algus, $asenduse_markide_arv);


