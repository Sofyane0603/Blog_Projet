<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>inscription</title>
</head>
<body class="Connexion">
    <div class="Formulaire">
        <form action="inscription.php" method="post">
            <div class="Insc_prenom">
                <label for="prenom">Prénom</label>
                <input id="prenom" type="text" name="prenom">
            </div>
            <div class="Insc_nom">
                <label for="nom">Nom</label>
                <input id="nom" type="text" name="nom">
            </div>
            <div class="Insc_email">
                <label for="email">Email</label>
                <input id="email" type="text" name="email">
            </div>
            <div class="Insc_mdp">
                <label for="motdepasse">Mot de passe</label>
                <input id="motdepasse" type="password" name="motdepasse">
            </div>
            
            <button class="Inscription_submit" type="submit">S'inscrire</button>
        </form>
        <p class="Deja_Inscrit">Déjà inscrit? <a href="Connexion.php">Connectez-vous ici</a></p>
    </div>
</body>

<?php
// Connexion MySQL
try {
    $dbh = new PDO('mysql:host=localhost;dbname=blog', 'root', 'FCbarcelone1');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
// Simple requête sans données à transmettreé
// Read - Lecture
$result = $dbh->query('SELECT id, firstname, lastname, email FROM users');
$users = $result->fetchAll();
?>


