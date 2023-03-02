<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Page succès</title>
</head>
<body class="body_succes">
<?php
// Connexion MySQL
try {
    $dbh = new PDO('mysql:host=localhost;dbname=blog', 'root', 'FCbarcelone1');     
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

$passwordHashed = password_hash($_POST['motdepasse'], PASSWORD_ARGON2I);
$prenom = ($_POST['prenom']);
$nom = ($_POST['nom']);
$email = ($_POST['email']);
session_start();
$_SESSION['prenom'] = $prenom;

$query = $dbh->prepare('SELECT id, email, password FROM users WHERE email = ?');
$query->execute([$_POST['email']]);
// Fonctionne car préparé
// Create - Création

$query = $dbh->prepare("INSERT INTO users(firstname, lastname, email, password, placement) VALUES (:prenom, :nom, :email, :motdepasse, :placement)");
$query->execute(['prenom' =>$prenom, 'nom' =>$nom, 'email' =>$email, 'motdepasse' => $passwordHashed, 'placement' => 0]);
if ($query) {
    echo "<div class='Formulaire2'>
          <h3>Vous êtes inscrit avec succès.</h3>
          <p>Cliquez ici pour vous <a href='Connexion.php'>connecter</a></p>
    </div>
    </body>";
}
