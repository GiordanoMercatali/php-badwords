<?php
$firstWord = $_GET['firstWord'];
$censoredWord = $_GET['censoredWord'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Part 1</h2>
    <p><?php echo $firstWord; ?></p>
    <p><?php echo $censoredWord; ?></p>
    <?php $bothWords = "{$firstWord}{$censoredWord}";
    $length = strlen($bothWords);
    ?>
    <p>Paragraph length: <?php echo $length; ?></p>

    <h2>Part 2</h2>
</body>
</html>