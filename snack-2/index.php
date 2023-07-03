<?php
    $getName = $_GET['name'] ?? '';
    $getMail = $_GET['mail'] ?? '';
    $getAge = $_GET['age'] ?? '';

    if (empty($getName) && empty($getMail) && empty($getAge)) {
        echo "Please type valid data.";
    } else {
        if (empty($getName) || empty($getMail) || empty($getAge)) {
            echo "The inputs are empty. Please re-insert the data.";
        } else {
            $nameLength = strlen($getName);
            $nameIsValid = $nameLength > 3;

            $mailIsValid = filter_var($getMail, FILTER_VALIDATE_EMAIL);

            $ageIsValid = is_numeric($getAge);

            if ($nameIsValid && $mailIsValid && $ageIsValid) {
                echo "Data is valid.";
            } else {
                echo "Please check the entered data.";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <form action="index.php" method="get">
        <div>
            <label for="name">Inserisci Nome:</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="mail">Inserisci Mail:</label>
            <input type="email" id="mail" name="mail">
        </div>
        <div>
            <label for="age">Inserisci Età:</label>
            <input type="text" id="age" name="age">
        </div> 
        
        <button type="submit">Invio Dati</button>
    </form>
</body>
</html>
