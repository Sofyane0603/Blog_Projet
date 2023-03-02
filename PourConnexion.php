<?php
session_start();
 // Connexion à MySQL
 try {
     $dbh = new PDO('mysql:host=localhost;dbname=blog', 'root', 'FCbarcelone1');
 } catch (PDOException $e) {
     print "Erreur !: " . $e->getMessage() . "<br/>";
     die();
 }
$query = $dbh->prepare('SELECT id, email, password, placement FROM users WHERE email = ?');
$query->execute([$_POST['email']]);
$user = $query->fetch();
if ($user) {
    if (password_verify($_POST['password'], $user['password'])) {
        session_start();
        $_SESSION['email'] = $user['email'];
        $_SESSION['is-connected'] = true;
        $_SESSION['placement'] = $user['placement'];
        $_SESSION['placement'] = $placement;
        unset($_SESSION['error-connection']);
        header('location: indexconnect.php');
    } else {
        session_start();
        $_SESSION['error-connection'] = "L'email ou le mot de passe est incorrect";
        header('location: Connexion.php?erreur=1');
    }
} else {
    session_start();
    $_SESSION['error-connection'] = "L'email ou le mot de passe est incorrect";

    header('location: Connexion.php?erreur=2');
}

    
        
            