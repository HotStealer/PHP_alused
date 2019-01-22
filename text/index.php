<?php
$tekst = '<b>Experience</b> <a href="#">is</a> the teacher <br> of fools';
echo strip_tags($tekst);
echo '<br>';
echo strip_tags($tekst, '<b>, <br>');
