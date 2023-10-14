<?php
include_once('connexion.php');

$email= $_POST['email'];
$mot_de_passe= $_POST['motdepasse'];
    $sql = 'SELECT * FROM utiilisateur WHERE email = :login AND mot_de_passe = :mot_de_passe';
    $requete = $connexion->prepare($sql);
    $requete->bindParam(':login', $email , PDO::PARAM_STR);
    $requete->bindParam(':mot_de_passe', $mot_de_passe ,PDO::PARAM_STR);
    $requete->execute();
    $resultat = $requete->fetchAll();
    var_dump($resultat);
   /* if ($resultat == 1) {
         header("Location: page_accueil.php");
         exit();
    } else {
        header("Location: connexion.php? erreur = 1");
         exit();

    }
*/




/*

try {
   
    $sql="INSERT INTO utilisateur(prenom,nom,email,mot_de_passe)VALUES(:prenom,:nom,:email,:mot_de_passe);
    $insertion= $connexion->prepare($sql);
    $connexion->execute([
        'prenom'=>$prenom,
        'nom'=>$nom,
        'email'=>$email,
        'mot_de_passe'=>$mot_de_passe
        ]);


    echo "New record created successfully";
}
catch 
      {(PDOException $e)
  
  	echo $sql . "<br>" . $e->getMessage();


  }
  */
  





?>