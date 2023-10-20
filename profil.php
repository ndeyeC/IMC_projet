<?php
include_once('connexion.php');
        $id_utilisateur = 1; // Remplacez par l'ID de l'utilisateur actuellement connecté
        $stmt = $connexion->prepare("SELECT * FROM utilisateurs WHERE id = ?");
        $stmt->execute([$id_utilisateur]);
        $utilisateur = $stmt->fetch();

        if ($utilisateur) {
            echo "<h2>Bienvenue, " . $utilisateur['nom'] . " !</h2>";
            echo "<p>Nom d'utilisateur : " . $utilisateur['login'] . "</p>";
            echo "<p>Email : " . $utilisateur['email'] . "</p>";
        } else {
            echo "Utilisateur non trouvé.";
        }

    <a href="modifier_profil.php">Modifier le profil</a>


    ?>
