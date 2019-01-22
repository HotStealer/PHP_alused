<?php
$tekst = 'All thinking men are atheists';
print_r(str_word_count($tekst,1));
echo '<br>';
$sona = str_word_count($tekst, 1);
echo $sona[2];
echo '<br>';
print_r(str_word_count($tekst, 2));