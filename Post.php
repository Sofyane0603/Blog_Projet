<?php   
require 'template/header-connec.php';
?>

<div class="menu">
    <div class="Poster">
        <div class="create-tab">
            <div class="title-workspace">
                <p>Créer un post pour votre blog :</p>
            </div>
            <div class="title-desc-workspace">
                <form action="PourPost.php" method="POST">
                    <div class="wpost_title">
                        <input type="title" name="title" id="title" placeholder="Titre" required>
                    </div>  
                    <div class="textarea-contenue">
                        <textarea type="text" name="content" id="content" placeholder="Contenu de votre post" required class="textarea"></textarea>
                    </div>
                    <div>
                        <button class="poster_submit" type="submit">Poster</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>