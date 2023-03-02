<?php
// Connexion MySQL
try {
    $dbh = new PDO('mysql:host=localhost;dbname=blog', 'root', 'FCbarcelone1');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>

<?php
$result = $dbh->query('SELECT id, title, content, author FROM article ORDER BY id DESC');
$article = $result->fetchAll();
foreach ($article as $user): ?>
<div class="poste2">
        <h1 class="post_title"><?php echo $user['title'] ?></h1> 
        <p class="p_content"><?php echo $user['content'] ?></p>  
        <p class="p_author"><?php echo 'écrit par : '; echo $user ['author']?></p>
        <form action="delete.php" method="post">
            <input type="text" name="id" value="<?= $user['id'] ?>" hidden>
            <button class='supprimer' type='submit'>Supprimer</button>
        </form> 
         
</div>   
<?php endforeach; ?>