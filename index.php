<?php
require_once 'config/autoload.php';
    if (!empty($_SESSION['user'])) {
      header('Location: ../../accueil.php?success=Vous êtes connecté.');
      die;
    };
    include_once './partials/header.php';
?>
    

<section class="container-fluid row justify-content-center ">
  <div class="col-6 border border-special">
  <h2 class="text-center">Inscription</h2>  
    <form class="row g-3 needs-validation" action="./process/auth/inscription.php" method="post" novalidate>
      <div class="col-md-6">
        <label for="validationCustom01" class="form-label">NOM</label>
        <input type="text" class="form-control" id="validationCustom01" placeholder="NOM" name="lastname" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-6">
        <label for="validationCustom02" class="form-label">PRENOM</label>
        <input type="text" class="form-control" id="validationCustom02" placeholder="PRENOM" name="firstname" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      
      <div class="col-12">
        <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
      </div>


      <div class="col-md-6">
        <label for="validationCustom03" class="form-label">VILLE</label>
        <input type="text" class="form-control" id="validationCustom03" name="city" required>
        <div class="invalid-feedback">
          Please provide a valid city.
        </div>
      </div>

      <div class="col-md-6">
        <label for="validationCustom03" class="form-label">CENTRE</label>
        <input type="text" class="form-control" id="validationCustom03" name="center" required>
        <div class="invalid-feedback">
          Please provide a valid center.
        </div>
      </div>
      
      <div class="col-12 text-center">
        <button class="btn" type="submit">S'inscrire</button>
      </div>
    </form>
  </div>


  <div class="col-6 border border-special">
  <h2 class="text-center">Connexion</h2>  
    <form class="row g-3 needs-validation" action="./process/auth/login.php" method="post" novalidate>
        <div class="col-md-6">
          <label for="validationCustom01" class="form-label">NOM</label>
          <input type="text" class="form-control" id="validationCustom01" placeholder="NOM" name="lastname" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-6">
          <label for="validationCustom02" class="form-label">PRENOM</label>
          <input type="text" class="form-control" id="validationCustom02" placeholder="PRENOM" name="firstname" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-12">
        <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
      </div>
      <div class="col-12 text-center">
        <button class="btn" type="submit">Se connecter</button>
      </div>

  </div>
</section>

<?php
    include_once './partials/footer.php';
?>