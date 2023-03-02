<?php // Connexion MySQL
try {
    $dbh = new PDO('mysql:host=localhost;dbname=blog', 'root', 'FCbarcelone1');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
} 

// Traitement des données
session_start();
$author = $_SESSION['email'];

$query = $dbh->prepare('INSERT INTO article (author, title, content, dates) VALUES (:author, :title, :content, :dates);');
if(($placement == 0) || ($placement == 2) ){
    $query->execute([
        'author' => $author, 
        'title' => $_POST['title'],
        'content' => $_POST['content'],
        'dates' => $date,
    ]);
}
// Redirection
header("location: indexconnect.php");
?>