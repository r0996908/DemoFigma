<?php

require_once __DIR__ . '/class/shape.php';

$shape = new Shape('red', 20, 30);
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figma</title>
</head>
<body>
    <?= $shape->render() ?>
</body>
</html>