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
 <li class="nav-item"><a class="nav-link" href="index.html">Accueil</a></li>
 <li class="nav-item"><a class="nav-link" href="categories.html">Categories</a></li>
 <li class="nav-item"><a class="nav-link" href="#">Ventes Flash</a></li>
 <li class="nav-item"><a class="nav-link" href="#">Vendre</a></li>
 <li class="nav-item"><a class="nav-link" href="#">Mon Compte</a></li>
 <li class="nav-item"><a class="nav-link" href="#">Panier</a></li>
 <li class="nav-item"><a class="nav-link" href="#">Admin</a></li>
 </ul>
 </div>
</nav>
    
	<div class="container-fluid features">
        <br><br>
        <h3 class="section-title">Rien de mieux qu'une bonne lecture.</h3><br><br><br>
		<div class="row">
            <?php
            $database = "AmazonECE";
            $db_handle = mysqli_connect('localhost', 'root', 'root');
            $db_found = mysqli_select_db($db_handle, $database);
            if ($db_found)
             {
                $sql = "SELECT * FROM Article";
                $result = mysqli_query($db_handle, $sql);
                $int=0;

            while ($data = mysqli_fetch_assoc($result))
            {$int++;
             if($int==5){
                 $int=0;
            ?>
            </div>
            <br>
            <div class="row">
            <?php 
             }
            ?>

             <div class="col-lg-3 col-md-3 col-sm-12">
                
                    <a href="img/produits/livres/<?php echo $data['Img']; ?>" target="_blank">
                    <img class="img-fluid" src="img/produits/livres/<?php echo $data['Img']; ?>">
                    </a>
                    
                    <h5><?php echo $data['Nom']; ?></h5>
                    
                    <span>Prix : <?php echo $data['Prix']; ?> €</span>
                    <p> <?php echo $data['Description']; ?></p>

                    <FORM>
                    <input class="ajouterpanier" formaction='gestionpanier.php'
                     type="button"
                     value="Ajouter au Panier">
                    <input type="hidden" name="ID" value="<?php echo $data['ID'];?>">


                    </FORM>
                    
              </div>


    <?php

         }
            	
    }
    else {
        echo "Database not found";
    }
        mysqli_close($db_handle);
    ?>

        </div>
        
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