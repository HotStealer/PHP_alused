<?php
$ees = $_GET['eesnimi'];
$pere = $_GET['perenimi'];
$otsi = array('ä','õ','ö','ü');
$asenda = array('a','o','o','y');
echo strtolower(str_replace($otsi, $asenda, $ees)).'.'.strtolower(str_replace($otsi, $asenda, $pere)).'@hkhk.edu.ee';