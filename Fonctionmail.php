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
			Merci de votre commande ! 
			 <br/>
			 Votre colis sera chez dans la semaine.
			 <br/>
			 <img src="commande.jpg">
			 <br/>

		</div>
	</body>

</html>
';
mail( "baptistelafay10@gmail.com", "Confirmation de commande", $message, $header);

echo "ca marche";
?>