<!DOCTYPE html>
<html>

    <head>
    
        <title>Nouveau Client</title>
    
        <meta charset="utf-8" />
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
               .cache{visibility: hidden}
        </style>
        <script type='application/javascript'>
        
                
            }
            $(document).ready(function(){
             $('.header').height($(window).height());
             });
        
        </script>
        <link rel="stylesheet" type="text/css" href="styles.css">
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
            <h2>Inscrivez-vous !</h2>
            <form method="post" action="addclientbdd.php" enctype="multipart/form-data" >
                <div class="form-group">
                    <label for="nom">Nom:</label><br>
        
                    <input type="text" name="Name" id="nom"><br>
                    
                    <label for="prenom">Prenom:</label><br>
                
                
                    <input type="text" name="prenom"><br>
                    <label for="mail">Mail:</label><br>
                
                
                    <input type="email" name="mail"><br>
                    
                    <label for="adresse1">Adresse1:</label><br>
                
                
                    <input type="text" name="adresse1"><br>
                    
                    <label for="adresse2">Adresse2:</label><br>
                
                
                    <input type="text" name="adresse2"><br>
                    
                    <label for="ville">Ville:</label><br>
                
                
                    <input type="text" name="ville"><br>
                    
                    <label for="cp">Code Postal:</label><br>
                
                
                    <input type="number" name="cp"><br>
                    
                    <label for="pays">Pays:</label><br>
                
                
                    <input type="text" name="pays"><br>
                    
                    <label for="numtel">Numero de téléphone:</label><br>
                
                
                    <input type="number" name="numtel"><br>
                    
                    <label for="nomcarte">Nom sur la carte:</label><br>
                
                
                    <input type="text" name="nomcarte"><br>
                    
                    
                    <label for="numcarte">Numero de carte:</label><br>
                
                
                    <input type="number" name="numcarte"><br>
                    
                     
                    <label for="typecarte"> Type de Carte: </label><br>
                    
                    <select id="typecarte" name="typecarte" >
                        <option  selected disabled hidden> Type</option>
                        <option >Visa</option>
                        <option >MasterCard</option>
                        <option>American Express</option>
                        <option >Autre</option>
                    </select> <br> <br>
                    <label for="datexp">date d'expiration:</label><br>
                
                
                    <input type="number" name="datexp" min="2018" max="2030"><br>
                    
                    <label for="codsec">Code de sécurité:</label><br>
                
                
                    <input type="number" name="codsec" max="999"><br>
                    
                    <label for="mdp">Mot de Passe:</label><br>
                
                
                    <input type="password" name="mdp" ><br>
                    
                    <label for="mdpc">Confirmez votre mot de passe:</label><br>
                
                
                    <input type="password" name="mdpc" ><br>
                        
                    
                   

                    
                <label for="Avatar">
                    Avatar:
                </label>
                <input type="file" name="image" id="image" class="btn btn-primary btn-sm"/><br/>

                <input type="Submit" class="btn btn-lg btn-primary btn-block" value="Soumettre"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="Reset" class="btn btn-lg btn-primary btn-block" value="Réinitialiser">
            </div>
         </form>
           
        </div>  
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