<?php 

function dump($variable) {
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';

}

function valid_donnees($donnees){
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = htmlspecialchars($donnees);
    return $donnees;
}

