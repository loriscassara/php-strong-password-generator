<!-- php variables -->
<?php 

    include('functions.php');

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