<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulaire</title>
</head>
<body>
    <form action="traitement_inscription.php" method="post">

        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="prenom">prenom :</label>
        <input type="text" id="prenom" name="prenom" required><br><br>

        
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="motdepasse">Mot_de_passe :</label>
        <input type="password" id="motdepasse" name="motdepasse" required><br><br>

        <input type="submit" value="S'inscrire">
    </form>
</body>
</html>