<?php
// Connexion MySQL
try {
    $dbh = new PDO('mysql:host=localhost;dbname=blog', 'root', 'FCbarcelone1');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

// Suppression article
// Delete - Suppression
$placement = $_SESSION['placement'];
$query = $dbh->prepare("DELETE FROM article WHERE id = ?");
$query->execute([$_POST['id']]);



// Redirection en php
header("location: /Blog Project");