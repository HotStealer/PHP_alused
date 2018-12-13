<?php
// muutujate defineerimine
// $muutujaNimi = väärtus;

$taisArv = 7;
$reaalArv = 3.14;
$sone = '7';
$toevaartusTrue = true;
$toevaartusFalse = false;

echo 'Täisarv = '.$taisArv.'<br>';
echo 'Reaalarv = '.$reaalArv.'<br>';
echo 'Sõne = '.$sone.'<br>';
echo 'Toeväärtus true = '.$toevaartusTrue.'<br>';
echo 'Toeväärtus false = '.$toevaartusFalse.'<br>';

echo gettype($sone).'<br>';
settype($sone, 'int');
echo gettype($sone).'<br>';