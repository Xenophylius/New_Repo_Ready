<?php
require_once '../../config/autoload.php';
require_once '../../config/connexion.php';
include '../../debug/debug.php';

if (empty($_POST['lastname']) ||
    empty($_POST['firstname']) ||
    empty($_POST['password'])) {
        header('Location: ../../index.php?error=Veuillez compléter tous les champs.');
        die;
    }

$user = new Userlogin ($_POST);
$userManager = new Users($db);
if (!$userManager->verifyLogin($user)) {
    header('Location: ../../index.php?error=Identifiant et/ou mot de passe incorrect.');
    die;
} else {
    $_SESSION['user'] = $user;
    header('Location: ../../accueil.php?success=Vous êtes connecté.');
};



