<?php
$nimi = $_GET['nimi'];
$otsi = array('noob','kurat','raisk');
$asenda = '****';
echo str_replace($otsi, $asenda, $nimi);