<!-- php variables -->
<?php 

    //Array letters
    $letters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];

    //Array numbers
    $numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

    //Array special characters
    $characters = ['!', '?', '$', '%', '^', '&', '*', '(', ')', '_', '-', '+', '=', '{', '}', '[', ']', ':', ';', '@', '#', '|', '<', ',', '>', '.', '/'];

    $numbersLetters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

    $lettersSymbols = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '!', '?', '$', '%', '^', '&', '*', '(', ')', '_', '-', '+', '=', '{', '}', '[', ']', ':', ';', '@', '#', '|', '<', ',', '>', '.', '/'];

    $numbersSymbols = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, '!', '?', '$', '%', '^', '&', '*', '(', ')', '_', '-', '+', '=', '{', '}', '[', ']', ':', ';', '@', '#', '|', '<', ',', '>', '.', '/'];

    //Array element
    $passwordElements = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, '!', '?', '$', '%', '^', '&', '*', '(', ')', '_', '-', '+', '=', '{', '}', '[', ']', ':', ';', '@', '#', '|', '<', ',', '>', '.', '/'];
    
    //Password lenght from form.php
    $passwordLenght = $_GET['passLenght'] ?? "Nessun numero inserito";

    /*
    //Select numbers from form.php
    $onlyNumbers = $_GET['onlyNumbers'];

    //Select letters from form.php
    $onlyLetters = $_GET['onlyLetters'];

    //Select symbols from form.php
    $onlySymbols = $_GET['onlySymbols'];
    */

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
    

    /*
    if ($onlyNumbers != 1 && $onlyLetters != 2 && $onlySymbols != 3 || $onlyNumbers != 1 && $onlyLetters != 2 && $onlySymbols != 3){ 
        function passwordGenerator($passwordLenght, $passwordElements){
            $password = '';
            for($i = 0; $i < $passwordLenght; $i++){
                $charachter = $passwordElements[array_rand($passwordElements)];
                $password .= $charachter;
            }

            return $password; //Se sono tutti e 3 disattivati o tutti e 3 attivati
        }
    } elseif ($onlyNumbers = 1 && $onlyLetters != 2 && $onlySymbols != 3){
        function passwordGenerator($passwordLenght, $passwordElements){
            $password = '';
            for($i = 0; $i < $passwordLenght; $i++){
                $charachter = $numbers[array_rand($numbers)];
                $password .= $charachter;
            }

            return $password; //Se attivo solo il check dei numeri
        }
    } elseif ($onlyNumbers != 1 && $onlyLetters = 2 && $onlySymbols != 3){
        function passwordGenerator($passwordLenght, $passwordElements){
            $password = '';
            for($i = 0; $i < $passwordLenght; $i++){
                $charachter = $letters[array_rand($letters)];
                $password .= $charachter;
            }

            return $password; //Se attivo solo il check delle lettere
        }
    } elseif ($onlyNumbers != 1 && $onlyLetters != 2 && $onlySymbols = 3){
        function passwordGenerator($passwordLenght, $passwordElements){
            $password = '';
            for($i = 0; $i < $passwordLenght; $i++){
                $charachter = $characters[array_rand($characters)];
                $password .= $charachter;
            }

            return $password; //Se attivo solo il check dei simboli
        }
    } elseif ($onlyNumbers = 1 && $onlyLetters = 2 && $onlySymbols != 3){
        function passwordGenerator($passwordLenght, $passwordElements){
            $password = '';
            for($i = 0; $i < $passwordLenght; $i++){
                $charachter = $numbersLetters[array_rand($numbersLetters)];
                $password .= $charachter;
            }
            
            return $password; //Se attivo il check dei numeri e delle lettere
        }
    } elseif ($onlyNumbers != 1 && $onlyLetters = 2 && $onlySymbols = 3){
        function passwordGenerator($passwordLenght, $passwordElements){
            $password = '';
            for($i = 0; $i < $passwordLenght; $i++){
                $charachter = $lettersSymbols[array_rand($lettersSymbols)];
                $password .= $charachter;
            }

            return $password; //Se attivo il check delle lettere e simboli
        }
    } elseif ($onlyNumbers = 1 && $onlyLetters != 2 && $onlySymbols = 3){
        function passwordGenerator($passwordLenght, $passwordElements){
            $password = '';
            for($i = 0; $i < $passwordLenght; $i++){
                $charachter = $numbersSymbols[array_rand($numbersSymbols)];
                $password .= $charachter;
            }

            return $password; //Se attivo il check dei numeri e simboli
        }
    }
    */

?>