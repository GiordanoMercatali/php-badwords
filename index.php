<?php?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="censored.php" method="GET">
        <label for="firstWord"> The first word is: </label>
        <input type="text" id="firstWord" name="firstWord">

        <label for="censoredWord"> The second word is: </label>
        <input type="text" id="censoredWord" name="censoredWord">

        <button type="submit"> Send </button>
    </form>
</body>
</html>