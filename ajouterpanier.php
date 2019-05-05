<?php
   session_start();
   array_push($_SESSION['panier'],$_POST['Idarticle']);
    header("location:javascript://history.go(-1)");
?>



