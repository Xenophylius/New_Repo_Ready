<?php
require_once '../../config/autoload.php';
require_once '../../config/connexion.php';
include '../../debug/debug.php';

if (empty($_POST['lastname']) ||
    empty($_POST['firstname']) ||
    empty($_POST['city']) ||
    empty($_POST['password']) ||
    empty($_POST['center'])) {
        header('Location: ../../index.php?error=Veuillez compléter tous les champs.');
        die;
    }

$user = new User ($_POST);
$userManager = new Users($db);

$userManager->addUser($user);
header('Location: ../../index.php?success=Vous êtes inscrit et connecté.');
die;
 