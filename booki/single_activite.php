<?php
// Tableau d'identifiants et de mot de passe de connexion
include_once 'identifiants.php';

// $_Session permettant de savoir si connecté ou pas
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booki</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/vingettes.css">
    <script src="https://kit.fontawesome.com/2bb90c57b5.js" crossorigin="anonymous"></script>

</head>
<body>
    <header>
        <?php include 'header.php'; ?>
    </header>

    <main>
        <?php include 'tab-activite.php'; ?>
        <?php 
            // Définir la variable $_GET
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
            } else {
                $id = 0;
            }
            foreach ($activites as $activite) { 
                if ($activite['id'] == $id) {

        ?>
            <section id="detailvignettes">
                <img src="<?=$activite['image'];?>" alt="<?=$activite['alt'];?>">
                <article>
                    <h1><?=$activite['nom'];?></h1>
                    <p class="prixhebergement"><?=$activite['prix'];?></p>
                    <p class="description"><?=$activite['alt'];?></p>
                </article>
                
            </section>
            <?php break;
                }
            };?>
    </main>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>

</body>
</html>