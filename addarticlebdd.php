<?php 
session_start();
$mailv= $_SESSION['utilisateur']; //on récupère le mail vendeur
require_once("nouvelarticle.php");
// On commence par récupérer les champs 
if(isset($_POST['Name']))      $name=$_POST['Name'];
else      $name="";

if(isset($_POST['quantite']))      $quantite=$_POST['quantite'];
else      $quantite="";

if(isset($_POST['cat']))      $cat=$_POST['cat'];
else      $cat="";
switch($cat){
    case "Musique":
        if(isset($_POST['artiste']))      $info1=$_POST['artiste'];
        else $info1="";
        if(isset($_POST['album']))      $info2=$_POST['album'];
        else $info2="";
        if(isset($_POST['genreM']))      $info3=$_POST['genreM'];
        else $info3="";
        
        break;
    case "SL":
        if(isset($_POST['brand']))      $info1=$_POST['brand'];
        else $info1="";
        if(isset($_POST['article']))      $info2=$_POST['article'];
        else $info2="";
        if(isset($_POST['couleur']))      $info3=$_POST['couleur'];
        else $info3="";
        
        break;
    case "Livre":
        if(isset($_POST['auteur']))      $info1=$_POST['auteur'];
        else $info1="";
        if(isset($_POST['editeur']))      $info2=$_POST['editeur'];
        else $info2="";
        if(isset($_POST['genreL']))      $info3=$_POST['genreL'];
        else $info3="";
        
        
        break;
    case "vetement":
        if(isset($_POST['marqueV']))      $info1=$_POST['marqueV'];
        else $info1="";
        if(isset($_POST['sex']))      $info2=$_POST['sex'];
        else $info2="";
        if(isset($_POST['piece']))      $info3=$_POST['piece'];
        else $info3="";
        
        break;
}

if(isset($_POST['description']))      $description=$_POST['description'];
else      $description="";

if(isset($_POST['prix']))      $prix=$_POST['prix'];
else      $prix="";
//Destination
$content_dir = 'img/produits/';
//On récupère le Nom du fichier dans le fichier tampon
$tmp_file = $_FILES['image']['tmp_name'];
// on vérifie qu'il a été upload
    if( !is_uploaded_file($tmp_file) )
    {
        exit("Le fichier est introuvable");
    }
    // on vérifie maintenant l'extension
    else{ 
        $type_file = $_FILES['image']['type'];

        if( !strstr($type_file, 'jpg') && !strstr($type_file, 'jpeg') && !strstr($type_file, 'bmp') && !strstr($type_file, 'gif') )
        {
        exit("Le fichier n'est pas une image");

        }
    // on copie le fichier dans le dossier de destination
        else{
            $name_file = $_FILES['image']['name'];
            $extension  = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    // On affecte à l'image un nouveau nom unique
            $nomImage = md5(uniqid()) .'.'. $extension ;

            if( !move_uploaded_file($tmp_file, $content_dir .$nomImage) ){
                exit("Impossible de copier le fichier dans $content_dir");
            }
    // On vérifie si les champs sont vides 
            else{
                    
                      if (empty($quantite)){
                        echo 'Attention le champs quantite est vide';
                    }else if(empty($name)){
                        echo 'Attention le champs nom est vide'; 
                    }else if (empty($cat)){
                        echo 'Attention le champs catégorie est vide';
                     } else if (empty($description)){
                        echo 'Attention le champs description est vide';
                    } else if (empty($prix)) 
                        { 
                            echo '<font color="red">Attention le champs prix est vide'; 
                        }
                    else if (empty($info1)or empty($info2) or empty($info3) )
                    {
                        echo '<font color="red">Un des champs catégorie est vide'; 
                    }
                    else{
                            DEFINE('DB_USERNAME', 'root');
                            DEFINE('DB_PASSWORD', 'root');
                              DEFINE('DB_HOST', 'localhost');
                              DEFINE('DB_DATABASE', 'AmazonECE1');

                            $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

                          if (mysqli_connect_error()) {
                                die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
                          }
                            else {
                                    if(empty($mailv)){
                                        $sql = "INSERT INTO Article (Qt, MailV, Img, Nom, Description, Prix, Categorie, Ventes, Info1, Info2, Info3)
                                        VALUES ('$quantite','aha@gmail.com','$nomImage','$name','$description','$prix','$cat','0','$info1','$info2','$info3')";
                                    }
                                else{
                                    $sql = "INSERT INTO Article (Qt, MailV, Img, Nom, Description, Prix, Categorie, Ventes, Info1, Info2, Info3)
                                        VALUES ('$quantite','$mailv','$nomImage','$name','$description','$prix','$cat','0','$info1','$info2','$info3')";
                                    
                                    
                                    
                                }
                                    if ($mysqli->query($sql) === TRUE) {
                                        echo "New record created successfully";
                                    } 
                                    else {
                                    echo "Error: " . $sql . "<br>" . $mysqli->error;
                                    }


    
                                    $mysqli->close();

                            }
                    }
            }
        }
    }

    
    

?>

