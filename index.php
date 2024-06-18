<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>
    <form action="answer.php" method="GET">
        <div>
            <div>
                <label for="paragraph">Type something</label>
            </div>

            <div>
                <textarea type="text" name="paragraph" id="paragraph"></textarea>
            </div>
        </div>

        <hr>

        <div>
            <div>
                <label for="censored">Type a word you want to censure</label>
            </div>

            <div>
                <input type="text" name="censored" id="censored">
            </div>
        </div>

        <hr>

        <div>
            <button>Invia il form</button>
        </div>
    </form>
</body>

</html>