<?php
// Tableau d'identifiants et de mot de passe de connexion
include_once 'identifiants.php';

// Session permettant de savoir si connecté ou pas
session_start();

// Si l'utilisateur a rentré un nomUser et son password correspondant : alors il se connecte à la page connexion.php
if (isset($_POST['nomUser']) && isset($_POST['password'])) {

    $_SESSION['nomUser'] = $_POST['nomUser'];
    $_SESSION['password'] = $_POST['password'];
}

// On vérifie si les identifiants sont bons
foreach ($identifiants as $identifiant) {
    if ($_SESSION['nomUser'] === $identifiant['nomUser'] && $_SESSION['password'] === $identifiant['password']) {
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booki</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/2bb90c57b5.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <?php include 'header.php'; ?>
    </header>

    <main>
        <section>
            <?='<h1>Bienvenue ' . $_SESSION['nomUser'] . '</h1>';
                // setcookie("nomUser", $nomUser, time() +3600);
                ?>
                <form method="post" action="deco.php">
                    <input type="submit" value="Déconnexion">
                </form>
        </section>

    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>
</html>

<?php 
    break;
    }elseif (empty($_SESSION['nomUser']) && empty($_SESSION['password'])) {
        echo "Vous n'avez pas accès à cette page";
        break;
    } elseif ($_SESSION['nomUser'] !== $identifiants['nomUser'] && $_SESSION['password'] !== $identifiants['password']) {
        $_SESSION['error'] = "Identifiants invalides.";
        header('Location: index.php');
    }
};  ?>

<?php
// if(isset($_POST['deconnexion'])) {
//     // setcookie("nomUser", $nomUser, time() -3600);
//     session_destroy();
//     header('Location: index.php');
// };
?>