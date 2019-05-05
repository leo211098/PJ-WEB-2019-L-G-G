<?php
   session_start();
    if (($key = array_search($_POST['Idarticle'], $_SESSION['panier'])) !== false) {
    unset($_SESSION['panier'][$key]);
}
   header("location:javascript://history.go(-1)");
?>



