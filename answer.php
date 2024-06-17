<?php

$paragraph = $_GET['paragraph'];
$censored = $_GET['censored'];
$censored_hidden = substr_replace($censored, '\*\*\*', 0);

echo 'Questo è il paragrafo inserito:' . ' ' . $paragraph .
    ', e la sua lunghezza è:' . ' ' . strlen($paragraph) . "<br />\n" . "<br />\n";


echo 'Così è come si presenta la parola censurata:' . ' ' . $censored_hidden . "<br />\n" . "<br />\n";



echo 'Questo è il paragrafo con censura:' . ' ' . $paragraph . $censored;
