<?php
include_once('connexion.php');

$nom= $_POST['nom'];
$prenom= $_POST['prenom'];
$email= $_POST['email'];
$mot_de_passe= $_POST['mot_de_passe'];
$sql = 'SELECT * FROM utilisateur WHERE email = :login ';
    $req = $connexion->prepare($sql);
    $req->bindParam(':login', $email , PDO::PARAM_STR);
    $req->execute();


        $sql = "INSERT INTO utilisateurs (nom, prenom ,email , mot_de_passe) VALUES (:nom, :prenom,:email,:mot_de_passe)";
        $req = $pdo->prepare($sql);
        $req->bindParam(':login', $login);
        $req->bindParam(':mot_de_passe', $motDePasse);
        $req->execute();
        $resultat = $requete->fetch();
        if ($resultat == 1) {

        // Redirigez l'utilisateur vers la page de connexion//
        header('Location: page_connexion.html');
        exit();
        } else {
        header("erreur");
         exit();

    }
    


