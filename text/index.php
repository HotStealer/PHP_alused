<?php
$tekst = 'Musta lehma saba musta lehma taga, valge lehma saba valge lehma taga';
$otsi = array('lehm', 'saba', 'taga');
$asenda = array('koer','sarv','ees');
echo substr_replace($otsi, $asenda,$tekst);


