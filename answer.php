<?php

$paragraph = $_GET['paragraph'];
$censored = $_GET['censored'];

echo 'Questo è il paragrafo inserito:' . ' ' . $paragraph .
    ', e la sua lunghezza è:' . ' ' . strlen($paragraph);
