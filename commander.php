<?php
   session_start();
echo $_POST['Idarticle'];
    if (($key = array_search($_POST['Idarticle'], $_SESSION['panier'])) !== false) {
    unset($_SESSION['panier'][$key]);
        echo $key;
}
 //  header("location:javascript://history.go(-1)");
?>



