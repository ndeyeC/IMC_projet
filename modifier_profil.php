<!DOCTYPE html>
<html>
<head>
    <title>Modifier le profil</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Modifier le profil</h1>

    <?php
    // Vérifier si le formulaire de modification a été soumis
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Mettre à jour les informations de l'utilisateur dans la base de données
        // Vous devrez implémenter cette partie
        // Récupérez les données du formulaire ($_POST) et effectuez la mise à jour
        // Redirigez ensuite l'utilisateur vers sa page de profil
    }
    ?>

    <form action="modifier_profil.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" value="<?php echo $utilisateur['nom']; ?>"><br><br>

        <label for="email">Email :</label>
        <input type="email" name="email" value="<?php echo $utilisateur['email']; ?>"><br><br>

        <input type="submit" value="Enregistrer les modifications">
    </form>
</body>
</html>