<!-- Write a function that merges two arrays (having the same number of elements) alternately taking elements from one and the other
eg. [a,b,c,d,e], [1,2,3,4,5] → [a,1,b,2,c,3,d,4,e,5]. -->

<?php 
    $arrayLetters = ['a', 'b', 'c', 'd', 'e'];
    $arrayNumbers = [1, 2, 3, 4, 5];

    function mergeArraysAlternately($array1, $array2) {
        $mergedArray = array();
    
        for ($i = 0; $i < count($array1); $i++) {
            $mergedArray[] = $array1[$i];
            $mergedArray[] = $array2[$i];
        }
    
        return $mergedArray;
    }

    $mergedArray = mergeArraysAlternately($arrayLetters, $arrayNumbers);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays Merged</title>
</head>
<body>
    [
    <?php foreach ($mergedArray as $element) { ?>
        <span>
            <?php echo $element ?>,
        </span>
    <?php } ?>
    ]
</body>
</html>