<?php 
    function getValuesRange($array, $a, $b) {
        $result = array();
    
        for ($i = $a; $i <= $b; $i++) {
            $result[] = $array[$i];
        }
        
        return $result;
    }

    $listNumbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $a = 2;
    $b = 7;

    $resultArray = getValuesRange($listNumbers, $a, $b);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($resultArray as $element) { ?>
        <span>
            [<?php echo $element ?>]
        </span>
    <?php } ?>
</body>
</html>