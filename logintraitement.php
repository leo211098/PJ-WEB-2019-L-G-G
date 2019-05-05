<?php
session_start();
$pseudo = isset($_POST["username"])?$_POST["username"] : ""; //if then else
$mdp = isset($_POST["password"])?$_POST["password"] : "";
$database = "AmazonECE";
$db_handle = mysqli_connect('localhost', 'root', 'root' );
$db_found = mysqli_select_db($db_handle, $database);

if ($db_found) {

    $rep = "SELECT Type FROM Utilisateur WHERE Mail LIKE '$pseudo' AND Mdp LIKE '$mdp'";
    $resultat = mysqli_query($db_handle, $rep);
    
    if ( mysqli_num_rows($resultat)) 
      { 
        $data = mysqli_fetch_assoc($resultat);
        $_SESSION['utilisateur'] = $pseudo;
        $_SESSION['type'] = $data['Type'];
        $_SESSION['panier']=array();
         header("Location: compte.php?"); //redirect URL
    }
    else {
        echo " N'existe pas " ;
         header('Location: login.php?erreur=true'); //redirect URL
        
    }
}//end if
else {
 echo "Database not found";
}//end else
//fermer la connection
mysqli_close($db_handle);


?>




