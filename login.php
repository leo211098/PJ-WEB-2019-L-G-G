<?php

$pseudo = isset($_POST["nom"])?$_POST["nom"] : ""; //if then else
$mdp = isset($_POST["mdp"])?$_POST["mdp"] : "";
$database = "test1";
$db_handle = mysqli_connect('localhost', 'root', '' );
$db_found = mysqli_select_db($db_handle, $database);


if ($db_found) {

    
    
    echo "Base de donees ouverte <br>";
    $rep = "SELECT pseudo, mdp FROM login WHERE pseudo LIKE '$pseudo' AND mdp LIKE '$mdp'";
    $resultat = mysqli_query($db_handle, $rep);
    if ( mysqli_num_rows($resultat) != 0 ) 
      { echo"l'utilisateur existe enfin smr";
    }else {
   echo " N'existe pas " ;
    }
}//end if
else {
 echo "Database not found";
}//end else
//fermer la connection
mysqli_close($db_handle);
?>




