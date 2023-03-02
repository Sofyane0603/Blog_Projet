<?php 
// Connexion MySQL
// try {
//     $dbh = new PDO('mysql:host=localhost;dbname=blog', 'root', 'FCbarcelone1');
//     print "MySQL connecté !";
// } catch (PDOException $e) {
//     print "Erreur !: " . $e->getMessage() . "<br/>";
//     die();
// }

//COnnexion à la BDD (2e façon)
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'FCbarcelone1');
define('DB_NAME', 'blog');
 
// Connexion à la base de données MySQL 
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Vérifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>