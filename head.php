<?php
try {
    $bdd = new PDO('mysql:host=cfaifrnfzyg5.mysql.db;dbname=cfaifrnfzyg5;charset=utf8', 'cfaifrnfzyg5', 'Aiut2020');
    //$bdd =  new PDO("mysql:dbname=cfaifrnfzyg5;host=localhost", 'root', '');

    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur :' . $e->getMessage());
}
session_start();
ini_set('display_errors', 1);

if (isset($_SESSION['status']) and $_SESSION['status'] == 'banni') {
    header('location: banni.php');
}
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>SoundPerception</title>
    <link rel="stylesheet" href="public/css/style-body.css">
    <link rel="stylesheet" href="public/css/style-footer.css">
    <link rel="stylesheet" href="public/css/style-navigation-bar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>