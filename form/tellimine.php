<h1>Tellimine</h1>
<?php
    // kera
    $keraadius = $_GET['ker'];
    $keruumala = 4/3*3.14*$keraadius*$keraadius*$keraadius;
    echo 'Kera ruumala on: '.$keruumala.'<br>';
    // silinder
    $sraadius = $_GET['sr'];
    $skorgus = $_GET['sh'];
    $sruumala = 3.14*$sraadius*$sraadius*$skorgus;
    echo 'Silindri ruumala on: '.$sruumala.'<br>';
    // koonus
    $koraadius = $_GET['kor'];
    $kokorgus = $_GET['koh'];
    $koruumala = 1/3*3.14*$koraadius*$koraadius*$kokorgus;
    echo 'Koonuse ruumala on: '.$koruumala.'<br>';
?>