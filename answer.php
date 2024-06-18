<?php

$paragraph = $_GET['paragraph'];
$censored = $_GET['censored'];
$censored_hidden = str_replace($censored, '***', $paragraph);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>
    <div>
        <h2>Questo è il paragrafo inserito:</h2>
        <p><?php echo $paragraph; ?></p>
    </div>

    <div>
        <h3>Questa è la parola da censurare:</h3>
        <p><?php echo $censored; ?></p>
    </div>

    <div>
        <h3>Questo è il paragrafo con la parola censurata</h3>
        <p><?php echo $censored_hidden; ?></p>
    </div>
</body>

</html>