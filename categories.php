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
    <div class="addcolor2"><br></div>
<div class="container-fluid p-0">
    <div class="row">
         <div class="col-lg-6 col-md-6 col-sm-12 lirededans">
             <a href="ventes.php?categorie=livres">
                <img src="img/site/livresfull.jpg" alt="Avatar" class="img-fluid imgcache" style="width:100%">
            <div class="middleelem">
                <div class="textinterieur">
                    <span>Livres</span><br>
                    <span>tfgh</span>
                </div>
            </div>
             </a>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 lirededans">
            <a href="ventes.php?categorie=musique">
                <img src="img/site/musiquefull.jpg" alt="Avatar" class="img-fluid imgcache" style="width:100%">
            <div class="middleelem">
                <div class="textinterieur">John Doe</div>
            </div>
            </a>
        </div>
    </div>
    <div class="addcolor2"><br></div>
    <div class="row">
         <div class="col-lg-6 col-md-6 col-sm-12 lirededans">
             <a href="ventes.php?categorie=vetements">
                 <img src="img/site/vetementsfull.jpg" alt="Avatar" class="img-fluid imgcache" style="width:100%">
            <div class="middleelem">
                <div class="textinterieur">Vetements</div>
            </div>
            </a>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 lirededans">
            <a href="ventes.php?categorie=loisirs">
                <img src="img/site/loisirsfull.jpg" alt="Avatar" class="img-fluid imgcache" style="width:100%">
            <div class="middleelem">
                <div class="textinterieur">Loisirs</div>
            </div>
            </a>
        </div>
    </div>
</div>
<div class="addcolor2"><br></div>
  
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

