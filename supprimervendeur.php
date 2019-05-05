<?php
    $database = "AmazonECE";
    $db_handle = mysqli_connect('localhost', 'root', 'root');
    $db_found = mysqli_select_db($db_handle, $database);
    if ($db_found)
     {
        echo gh;
        $sql = "DELETE FROM `Utilisateur` WHERE `Id` = '".$_POST['Idvendeur']."'";
        $res=mysqli_query($db_handle, $sql);
    }
            	
    
    else {
        echo "Database not found";
    }
        mysqli_close($db_handle);

    header("location:javascript://history.go(-1)");

?>



