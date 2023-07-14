<?php 
    include_once __DIR__ . '/data/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
</head>
<body>
    <?php foreach ($productList as $product) {
        var_dump($product);
    } ?>
</body>
</html>