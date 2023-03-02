<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="Connexion">
<div>
    <div class="Formulaire">
        <form action="PourConnexion.php" method="post">
            <div class="Connexion-email">
                <label for="email">Adresse Email</label>
                <input class="form-control" class="form-control" id="email" type="email" name="email">
            </div>
            <div class="Connexion-mdp">
                <label class="Connexion_mdp" for="motdepasse">Mot de passe</label>
                <input class="form-control" class="form-control" id="motdepasse" type="password" name="password">
            </div>
            <button class="Connect_submit" type="submit">Se connecter</button>
        </form>
        <p class="Connexion_inscription">Si vous n'avez pas de compte <a href="lala.php">cliquez ici</a></p>
    </div>
</div>
<div>
    
</div>
</body>
<!-- Pour une erreur de connexion -->
<?php
if (isset($_GET['erreur'])) {
    $err = $_GET['erreur'];
    if ($err == 1) {
        echo "<p class = 'manquant' style='color:red'>Utilisateur ou mot de passe incorrect</p>";
    }
    if ($err == 2) {
        echo "<p class = 'manquant' style='color:red'>Utilisateur et mot de passe manquant</p>";
    }
        
}

?>