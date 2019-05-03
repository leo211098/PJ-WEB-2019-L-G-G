<?php
   session_start();
    //foreach($_SESSION['panier'] as $item) {
         //           unset($item);
            //    }
unset($_SESSION['panier']);
$_SESSION['panier']=array();
   header("location:javascript://history.go(-1)");
?>



