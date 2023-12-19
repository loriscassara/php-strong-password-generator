<!-- php variables -->
<?php 

    //Array letters
    $letters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

    //Array uppercase letters
    $uppLetters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];

    //Array numbers
    $numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

    //Array special characters
    $characters = ['!', '?', '$', '%', '^', '&', '*', '(', ')', '_', '-', '+', '=', '{', '}', '[', ']', ':', ';', '@', '#', '|', '<', ',', '>', '.', '/'];

    //Array element
    $passwordElements = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, '!', '?', '$', '%', '^', '&', '*', '(', ')', '_', '-', '+', '=', '{', '}', '[', ']', ':', ';', '@', '#', '|', '<', ',', '>', '.', '/'];
    
    //Password lenght from form.php
    $passwordLenght = $_GET['passLenght'] ?? "Nessun numero inserito";

?>

<!-- php functions -->
<?php 

    //functions => random password generated
    function passwordGenerator($passwordLenght, $passwordElements){
        $password = '';
        for($i = 0; $i < $passwordLenght; $i++){
            $charachter = $passwordElements[array_rand($passwordElements)];
            $password .= $charachter;
        }

        return $password;
    }

?>