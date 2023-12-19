<!-- php variables -->
<?php 

    include('functions.php');

    /*
    //Array letters
    $letters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

    //Array uppercase letters
    $uppLetters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];

    //Array numbers
    $numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

    //Array special characters
    $characters = ['!', '?', '$', '%', '^', '&', '*', '(', ')', '_', '-', '+', '=', '{', '}', '[', ']', ':', ';', '@', '#', '|', '<', ',', '>', '.', '/'];

    //Array single
    $passwordGen = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, '!', '?', '$', '%', '^', '&', '*', '(', ')', '_', '-', '+', '=', '{', '}', '[', ']', ':', ';', '@', '#', '|', '<', ',', '>', '.', '/'];

    //Password lenght from form.php
    $passwordLenght = $_GET['passLenght'] ?? "Nessun numero inserito";

    //Password generate
    $password = '';
    
    
    for ($i = 0; $i < $passwordLenght; $i++){
        $character = $passwordGen[array_rand($passwordGen)];
        $password .= $character;
    }
    */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Php</title>

    <!-- import bootstrap v5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg-dark text-white">

    <header>

        <!-- page title -->
        <h1 class="text-center fw-bold pt-5">Password:</h1>
    
    </header>

    <main>
        
        <div class="password-container text-center">
            <?php 
                echo '<p>' . passwordGenerator($passwordLenght, $passwordElements) . '</p>';
            ?>
        </div>

    </main>
    
    <!-- import bootstrap v5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>