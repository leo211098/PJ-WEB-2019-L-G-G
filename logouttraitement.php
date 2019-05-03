<?php
   session_start();
   unset($_SESSION["utilisateur"]);
   unset($_SESSION["type"]);
   unset($_SESSION['panier']);
   header('Location: login.php');
?>



