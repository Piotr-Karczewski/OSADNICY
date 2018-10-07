<?php 

	session_start();
	
	if(!isset($_SESSION['zalogowany']))
	{
	header('Location: index.php');
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

<body class="bg-primary text-white backgr">

<?php
	echo "<p>Witaj ".$_SESSION['user'].'! [ <a href="logout.php">Dla ciebie trud skończony...Wyloguj się!</a> ]</p>';
	echo '[ <a href="plansza.html">Powrót do układu</a> ]</p>';
	echo "<p><b>Ziemnioki</b>:".$_SESSION['drewno'];
	echo " | <b>Kamienie</b>:".$_SESSION['kamien'];
	echo " | <b>Antidotum na halucynacje z zimna i niedożywienia</b>:".$_SESSION['zboze']."</p>";
	
	echo "<p><b>E-mail</b>: ".$_SESSION['email'];
	echo "<br /><b>Dni premium</b>: ".$_SESSION['dnipremium']."</p>";
?>
	<button type="button" class="btn btn-outline-danger">
	<a href="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9d/%D0%91%D1%83%D1%82%D0%B0%D0%BA%D0%BE%D0%B2%D0%BE_%D0%BE%D1%81%D0%B5%D0%BD%D1%8C%D1%8E.jpg/800px-%D0%91%D1%83%D1%82%D0%B0%D0%BA%D0%BE%D0%B2%D0%BE_%D0%BE%D1%81%D0%B5%D0%BD%D1%8C%D1%8E.jpg">Wygeneruj Łotewskie marzenie</a>
	</button>
</body>

</html>