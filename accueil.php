<?php
require_once 'config/autoload.php';
require_once 'config/connexion.php';


    if (empty($_SESSION['user'])) {
        header('Location: index.php?error=Vous devez vous connecter.');
    }

    include_once 'partials/header.php';

    
    
    $usersManager = new Users($db);
    echo '<pre>';
    var_dump($usersManager->findAll());
    echo '</pre>';

?>

<h1>TITRE</h1>

<?php 
include_once 'partials/footer.php';
?>