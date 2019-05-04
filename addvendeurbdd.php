<?php 
session_start(); 
require_once("nouveauvendeur.php");
if(isset($_POST['Name']))      $name=$_POST['Name'];
else      $name="";


if(isset($_POST['prenom']))      $prenom=$_POST['prenom'];
else      $prenom="";


if(isset($_POST['mail']))      $mail=$_POST['mail'];
else      $mail="";

if(isset($_POST['adresse1']))      $adresse1=$_POST['adresse1'];
else      $adresse1="";


if(isset($_POST['adresse2']))      $adresse2=$_POST['adresse2'];
else      $adresse2="";

if(isset($_POST['ville']))      $ville=$_POST['ville'];
else      $ville="";

if(isset($_POST['cp']))      $cp=$_POST['cp'];
else      $cp="";


if(isset($_POST['pays']))      $pays=$_POST['pays'];
else      $pays="";


if(isset($_POST['numtel']))      $numtel=$_POST['numtel'];
else      $numtel="";


if(isset($_POST['numcarte']))      $numcarte=$_POST['numcarte'];
else      $numcarte="";

if(isset($_POST['typecarte']))      $typecarte=$_POST['typecarte'];
else      $typecare="";


if(isset($_POST['datexp']))      $datexp=$_POST['datexp'];
else      $datexp="";

if(isset($_POST['codsec']))      $codsec=$_POST['codsec'];
else      $codsec="";


if(isset($_POST['mdp']))      $mdp=$_POST['mdp'];
else      $mdp="";


if(isset($_POST['mdpc']))      $mdpc=$_POST['mdpc'];
else      $mdpc="";

if(isset($_POST['nomcarte']))      $nomcarte=$_POST['nomcarte'];
else      $nomcarte="";


// On commence par récupérer les champs 


//Destination
$content_dir = 'img/avatar/';
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
                    
                      if (empty($prenom)){
                        echo 'Attention le champs prenom est vide';
                    }else if(empty($name)){
                        echo 'Attention le champs nom est vide'; 
                    }else if (empty($mail)){
                        echo 'Attention le champs mail est vide';
                     } else if (empty($adresse1)){
                        echo 'Attention le champs adresse est vide';
                    } else if (empty($ville)) 
                        { 
                            echo '<font color="red">Attention le champs ville est vide'; 
                        }
                    else if (empty($cp)) 
                        { 
                            echo '<font color="red">Attention le champs code postal est vide'; 
                        }
                    else if (empty($pays)) 
                        { 
                            echo '<font color="red">Attention le champs pays est vide'; 
                        }
                    else if (empty($numtel)) 
                        { 
                            echo '<font color="red">Attention le champs numero de téléphone est vide'; 
                        }
                
                    else if (empty($numcarte)or empty($typecarte) or empty($codsec) or empty($datexp) or empty($nomcarte) )
                    {
                        echo '<font color="red">Veuillez renseigner toutes vos coordonnees bancaires '; 
                    }
                    else if ($mdp!=$mdpc) 
                        { 
                            echo '<font color="red">Attention les mots de passe ne correspondent pas '; 
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
                                $vmail= "SELECT * FROM 	`Utilisateur` WHERE `Mail`= $mail";
                                if(empty($vmail)){
                                    
                                        $sql = "INSERT INTO `Utilisateur`(`Mail`, `Nom`, `Prenom`, `Adresse1`, `Adresse2`, `Ville`, `Code_Postal`, `Pays`, `Numero_Telephone`, `Numero_Carte`, `Nom_Carte`, `Type_Carte`, `Date_Expiration`, `Code_Securite`, `Img`, `Type`, `Mdp`) VALUES ('$mail','$name','$prenom','$adresse1','$adresse2','$ville','$cp','$pays','$numtel','$numcarte','$nomcarte','$typecarte','$datexp','$codsec','$nomImage','vendeur','$mdp')";
                                    

                                    
                                    
                                
                                    if ($mysqli->query($sql) === TRUE) {
                                        echo "New record created successfully";
                                    } 
                                    else {
                                    echo "Error: " . $sql . "<br>" . $mysqli->error;
                                    }


                                }
                                else echo("Vous avez déjà un compte !!!!");
                                    $mysqli->close();
                                   

                            }
                   }
            }
        }
    }

    

?>

