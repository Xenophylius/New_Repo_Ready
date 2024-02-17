<?php
require_once 'config/autoload.php';

    if (empty($_SESSION['user'])) {
        header('Location: index.php?error=Vous devez vous connecter.');
    }

    include_once 'partials/header.php';

    var_dump($_SESSION['user']->superGetter('center'));
    
?>

<h1>TITRE</h1>

<?php 
include_once 'partials/footer.php';
?>