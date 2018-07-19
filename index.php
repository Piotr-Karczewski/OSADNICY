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

<body>

	Zostań wybrańcem! Przywróć równowagę mocy<br /><br />
	
	<a href="rejestracja.php">Rejestracja - załóż darmowe konto!</a>
	<br /><br />
	
	<form action="zaloguj.php" method="post">
	
	Login :<br /> <input type="text" name="login" /> <br />
	Hasło :<br /> <input type="password" name="haslo" /> <br />
	<input type="submit" value="Zaloguj się" />
	
	</form>
	
	<form>
  <div class="form-group">
    <label for="formGroupExampleInput">Example label</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Another label</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
  </div>
</form>
	
<?php
	if(isset($_SESSION['blad'])) echo $_SESSION['blad'];
?>
</body>

</html>