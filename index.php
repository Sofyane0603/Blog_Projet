<?php
session_start();
if (isset($_SESSION['is-connected']) && $_SESSION['is-connected'])  {
    header('location: indexconnect.php');
}?>
<?php
require 'template/header-disconnect.php'; ?>
<H1 class="Accueil">Veuillez vous <a href="Connexion.php">connecté</a>  pour avoir accès au blog</H1></body>
<?php
// Connexion MySQL
try {
    $dbh = new PDO('mysql:host=localhost;dbname=blog', 'root', 'FCbarcelone1');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}