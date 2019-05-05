<?php

session_start();

    if(isset($_SESSION['utilisateur']) && $_SESSION['utilisateur'] != "")
        {
            //Task to do
            
         }
    else{
            header('Location: login.php'); //redirect URL
        }

?>
<!DOCTYPE html>
<html>
<head>
 <title>pagepro</title>
 <meta charset="utf-8"/>
    
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="styles.css">
    
    <script type="text/javascript">
     $(document).ready(function(){
     $('.header').height($(window).height());
     });
    </script>
    
</head>

<body>
	<nav class="navbar navbar-expand-md">
 <a class="navbar-brand" href="#">Logo</a>
 <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
 <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="main-navigation">
 <ul class="navbar-nav">
 <li class="nav-item"><a class="nav-link" href="accueil.php">Accueil</a></li>
 <li class="nav-item"><a class="nav-link" href="categories.php">Categories</a></li>
 <li class="nav-item"><a class="nav-link" href="ventesflash.php">Ventes Flash</a></li>
 <li class="nav-item"><a class="nav-link" href="vendre.php">Vendre</a></li>
 <li class="nav-item"><a class="nav-link" href="compte.php">Mon Compte</a></li>
 <li class="nav-item"><a class="nav-link" href="panier.php">Panier</a></li>
 <li class="nav-item"><a class="nav-link" href="admin.php">Admin</a></li>
 </ul>
 </div>
</nav>
    
	<div class="container-fluid features">
        <br>
        <?php
        
        if($_SESSION['type']=="Vendeur"){
            echo '<br><br>
            <h3 class="section-title">Vous avez besoin du compte acheteur pour acheter des articles !</h3>
            <br><br><br><br>
        
            <a class="btn btn-lg btn-primary btn-block" href="register.php">Demander un compte vendeur !</a>
            <br>';
        }
        else{
        ?>
         <br>   
        <h3 class="section-title">Gerez ici votre panier !</h3>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <a class="btn btn-lg btn-primary btn-block" href="viderpanier.php">Vider le panier</a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <a class="btn btn-lg btn-primary btn-block" href="commander.php">Passer la commande</a>
            </div>
            
        </div>
        <br><br>
        <div class="row">
            <?php
            
            $database = "AmazonECE";
            $db_handle = mysqli_connect('localhost', 'root', 'root');
            $db_found = mysqli_select_db($db_handle, $database);
            if ($db_found)
             {
                $sql = "";
                foreach($_SESSION['panier'] as $item) {
                    $sql .= "SELECT * FROM `Article` WHERE `Id` = '".$item."';";
                }
                if (mysqli_multi_query($db_handle, $sql))
                {
                  do
                    {
                    // Store first result set
                    if ($res=mysqli_store_result($db_handle)) {
                      // Fetch one and one row
                      while ($data=mysqli_fetch_assoc($res))
                        {
                ?>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <form method="POST" action="supprimerpanier.php">
                                <button class="btn btn-lg btn-primary btn-block" type="submit" name="Idarticle" value="<?php echo $data['Id']; ?>">Supprimer du panier</button>
                            </form>
                            <a href="article.php?idarticle=<?php echo $data['Id']; ?>">
                            <img class="img-fluid" src="img/produits/<?php echo $data['Img']; ?>">


                            <h5><?php echo $data['Nom']; ?></h5>

                            <span>Prix : <?php echo $data['Prix']; ?> €</span>
                            <p> <?php echo $data['Description']; ?></p>
                            </a>
                            
                          </div>
            <?php
                        }
                      // Free result set
                      mysqli_free_result($res);
                      }
                    }
                  while (mysqli_next_result($db_handle));
                }
            ?>
    <?php
       
    }
    else {
        echo "Database not found";
    }
        mysqli_close($db_handle);
    ?>

        </div>
        <?php
        }
        ?>
    </div>
		<br><br><br>

</body>
 <footer class="page-footer">
     
    <p>
     37, quai de Grenelle, 75015 Paris, France 
     info@webDynamique.ece.fr 
     +33 01 02 03 04 05 
     +33 01 03 02 05 04
     </p>
        
</footer>
</html>