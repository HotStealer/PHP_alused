<?php
echo time().'<br>';
echo date('d.m.Y G:i' , time()).'<br>';
date_default_timezone_set('Europe/Tallinn');
$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');
echo $paev.'.'.$kuu.' '.$aasta;
?>