<?php
echo time().'<br>';
echo date('d.m.Y G:i' , time()).'<br>';
date_default_timezone_set('Europe/Tallinn');
$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');
echo $paev.'.'.$kuu.' '.$aasta.'<br>';
$sp = mktime(18,14,4,11,21,1979);
echo date('d.m.Y', $sp).'<br>';
echo date('d.m.Y G:i' , time()+2000).'<br>';
echo date('d.m.Y G:i' , time()+2500*150).'<br>';
echo date('d.m.Y G:i' , time()+59*120*954).'<br>';
echo strtotime("+12 week 5 days 2 hours 20 seconds").'<br>';
?>