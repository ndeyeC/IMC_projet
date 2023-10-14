<?php
$bdd = 'mysql:host=localhost;dbname=imc';
$username = 'root';
$password = 'root';

try {
    $connexion = new PDO($bdd, $username, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    


    echo "Connexion réussie à la base de données";
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
     
}

?>