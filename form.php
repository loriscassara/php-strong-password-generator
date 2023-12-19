<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Php</title>

    <!-- import bootstrap v5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg-dark text-white">

    <header>

        <!-- page title -->
        <h1 class="text-center fw-bold pt-5">Strong Password Generator</h1>

        <!-- page subtitle -->
        <h3 class="text-center fw-bold pt-3 fst-italic">Genera una password sicura</h3>

    </header>

    <main class="d-flex justify-content-center">
    
        <!-- input form password generator -->
        <div class="input-container text-center" style="width: 50%; margin: 0 auto;">
		    <form action="password.php" class="pt-5">
  			    <div class="mb-3">
    			    <label for="passLenght" class="form-label">Lunghezza Password:</label>
    			    <input type="number" class="form-control" id="password-lenght" name="passLenght" aria-describedby="emailHelp" placeholder="Password Lenght.." min="4"    max="10" style="width: 35%; margin: 0 auto;">
  			    </div>
               <div class="form-check">
                    <input type="checkbox" value="1" id="flexCheckDefault" name[]="onlyNumbers">
                    <label class="form-check-label" for="flexCheckDefault">
                        Solo numeri
                    </label>
                </div>
                <div class="form-check">
                    <input type="checkbox" value="2" id="flexCheckDefault" name[]="onlyLetters">
                    <label class="form-check-label" for="flexCheckDefault">
                        Solo lettere
                    </label>
                </div>
                <div class="form-check">
                    <input type="checkbox" value="3" id="flexCheckDefault" name[]="onlySymbols">
                    <label class="form-check-label" for="flexCheckDefault">
                        Solo simboli
                    </label>
                </div>
  			    <button type="submit" class="btn btn-primary mt-4">Invia</button>
		    </form>
	    </div>

    </main>
    
    <!-- import bootstrap v5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>