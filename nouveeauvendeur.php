<!DOCTYPE html>
<html>

    <head>
    
        <title>Nouvel article</title>
    
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
            <h2>Ajouter un nouvel Article</h2>
            <form method="post" action="addvendeurbdd.php" enctype="multipart/form-data" >
                <div class="form-group">
                    <label for="nom">Nom de l'article:</label><br>
        
                    <input type="text" name="Name" id="nom"><br>
                    
                    <label for="nom">Quantité de vente:</label><br>
                
                
                    <input type="number" name="quantite"><br>
                    <label for="Catégorie"> Catégorie de l'article: </label><br>
                    
               
                
                


                    <select id="cat" name="cat" onchange= "afficher()">
                        <option  selected disabled hidden>Sélectionnez votre catégorie</option>
                        <option value="Livre" >Livre</option>
                        <option value="Musique" >Musique</option>
                        <option value="SL">Sport et Loisir</option>
                        <option value="vetement">Vetement</option>
                    </select>

                    <div class="row">
                        <div  class="col-lg-3">
                            <br>
                            <div id="mus" class="cache">
                                Artiste:
                                <input type="text" name="artiste"><br><br>
                                Album:
                                <input type="text" name="album"><br><br>
                                Genre:
                                <input type="text" name="genreM"><br>
                            </div>

                        </div>
                            <div class="col-lg-3">
                                <br>
                                <div id="liv" class="cache" >
                                    Auteur:
                                    <input type="text" name="auteur"><br><br>
                                    Editeur:
                                    <input type="text" name="editeur"><br><br>
                                    Genre:
                                    <input type="text" name="genreL"><br>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <br>
                                <div id="SL" class="cache" >
                                    Marque:
                                    <input type="text" name="brand"><br><br>
                                    Article:
                                    <input type="text" name="article"><br><br>
                                    Couleur:
                                    <input type="text" name="couleur"><br>

                                </div>
                            </div>
                            <div class="col-lg-3">
                                <br>
                                <div id="vetement" class="cache">
                                     Sexe:
                                    <select id="sex" name="sex" >
                                        <option  selected disabled hidden>Sexe</option>
                                        <option>Homme</option>
                                        <option>Femme</option>
                                        <option>Enfant</option>
                                    </select><br><br>
                                    Pièce:
                                    <input type="text" name="piece"><br><br>
                                    Marque:
                                    <input type="text" name="marqueV"><br>

                                </div>
                            </div>
                        </div>
                    
                    <br>

                    <br>
                    <label for="description">
                    Description:
                    </label><br>

                    <input type="text" name="description">
                
                <br>
                <label for="prix">
                Prix:
                </label><br>
                <input type="number" name="prix">
                <br>
                <label for="image">
                    Image:
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