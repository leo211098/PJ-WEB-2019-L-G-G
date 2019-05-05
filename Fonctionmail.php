<!DOCTYPE html>
<html>
<head>
	<title>Mail</title>
</head>
<body>
<form>
	<input type="submit" name="boutton" value="Connexion">
</form>
</body>
</html>





<?php 

$header="MIME-Version: 1.0\r\n";
$header.=' From : "ECE-Amazon" <ECE-Amazon>' . "\n";
$header.= 'Content-Type:text/html; charset="utf-8"' . "\n";
$header.= 'Content-Transfer-Encoding : 8bit';

$message='

<html>

	<body>
		<div align="center">
			
			 <br/>
			 Nous vous remercions de votre commande.
			 Que vous pouvez suivre sur ce lien.
			 Votre colis sera chez dans la semaine.
			 <br/>
			 <img src="commande.jpg">

			 <br/>

		</div>
	</body>

</html>
';
mail( "baptistelafay10@gmail.com", "Confirmation de commande", $message, $header);



?>
<!DOCTYPE html>
<html>
<head>
	<title> Commande Validée </title>

</head>
<body>
Vous venez de recevoir un mail de confirmation 
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Mail</title>
</head>
<body>
<form action="email.php" method="post">
	<input type="submit" name="boutton" value="Connexion">
</form>
</body>
</html>





<?php 
$mail = isset($_POST["mail"])?$_POST["mail"] : "";
$header="MIME-Version: 1.0\r\n";
$header.=' From : "ECE-Amazon" <ECE-Amazon>' . "\n";
$header.= 'Content-Type:text/html; charset="utf-8"' . "\n";
$header.= 'Content-Transfer-Encoding : 8bit';

$message='

<html>

	<body>
		<div align="center">
			Merci de votre commande ! 
			 <br/>
			 Votre colis sera chez dans la semaine.
			 <br/>
			 <img src="https://www.google.com/url?sa=i&source=images&cd=&cad=rja&uact=8&ved=2ahUKEwiO8I3FhoXiAhUMJBoKHaf_CfkQjRx6BAgBEAU&url=https%3A%2F%2Fwww.lapirate.fr%2Fboutique%2Ftampons-en-bois%2Ftampon-packaging%2Ftampon-hand-merci-pour-votre-commande-packaging%2F&psig=AOvVaw0waBRstVeT6CoLQWX9HQvJ&ust=1557168416268334">
			 <br/>
		</div>
	</body>

</html>
';
mail( $mail, "Confirmation de commande", $message, $header);

echo "Un mail de confirmation a été envoyé sur votre adresse mail ";
?>