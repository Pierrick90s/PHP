<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>

<?php
session_start();

require("cnxnbdd.php");

$error_msg = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    if ($email != "" && $mdp != "") {
        $stmt = $pdo->prepare("SELECT * FROM user WHERE email = :email");
        $stmt->execute([':email' => $email]);

        $reponse = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($reponse && !empty($reponse['id'])) {
            $hashed_password = $reponse['mdp'];
            if (password_verify($mdp, $hashed_password)) {

                // Session et check role
                $_SESSION['user'] = $reponse;

                if (isset($_SESSION['user']['role'])) {
                    if ($_SESSION['user']['role'] == 'CLIENT') {
                        header('Location: index.php');
                        exit;
                    } elseif ($_SESSION['user']['role'] == 'GERANT') {
                        header('Location: gerant.php');
                        exit;
                    } elseif ($_SESSION['user']['role'] == 'ADMIN') {
                        header('Location: admin.php');
                        exit;
                    }
                }

            } else {
                $error_msg = "Email ou mot de passe incorrect !";
            }
        } else {
            $error_msg = "Email ou mot de passe incorrect !";
        }
    }
}
?>


<body>
    <form method="POST" action="">
        <input type="text" id="email" name="email" required>
        <label for="email">E-mail</label>

        <input type="password" id="mdp" name="mdp" required>
        <label for="mdp">Mot de passe</label>

        <input type="submit" value="Connexion" name="ok">
    </form>
    <a href="index.php"><button>Retour</button></a>
    <?php
    if ($error_msg) {
    ?>
        <p><?php echo $error_msg; ?> </p>
    <?php
    }
    ?>
</body>

</html>