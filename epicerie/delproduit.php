<?php
require("cnxnbdd.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        $stmt = $pdo->prepare("DELETE FROM produit WHERE id = :id");
        $stmt->execute([':id' => $id]);
        }
    };
    header("refresh:0;url=lproduit.php");
    exit;
?>