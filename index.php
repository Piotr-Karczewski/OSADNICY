<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: gra.php');
		exit();
	}
?>

<!DOCTYPE HTML>
<html lang="pl" />
<head>
	<meta charset="utf-8" />
	<meta http-equiv=X-UA-Compatible" content="IE=edge,chrome=1"/>
	<title>Osadnicy - gra przeglądarkowa</title>
	<link rel="stylesheet" href="style.css" type="text/css">
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
</head>

<body class="bg-primary text-white">
	Zostań wybrańcem! Przywróć równowagę mocy<br /><br />
	
	<a class="bg-secondary text-white href="rejestracja.php">Rejestracja - załóż BAAAAAARDZO DROGIE KONTO!</a>
	<br /><br />
	<form action="zaloguj.php" method="post">
  <div class="form-group">
    <label for="formGroupExampleInput">Podaj swoją nazwę</label>
    <input name="login" type="text" class="form-control" id="formGroupExampleInput" placeholder="Nazwa Użytkownika">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Podaj swoje hasło</label>
    <input name="haslo" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Hasło">
  </div>
  <input type="submit" value="Zaloguj się" />
</form>	
<?php
	if(isset($_SESSION['blad'])) echo $_SESSION['blad'];
?>
</body>

</html>