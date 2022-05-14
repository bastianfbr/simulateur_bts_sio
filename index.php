<?php
    include 'app.php';
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulateur de BTS SIO</title>
    <link rel="icon" href="logo.png" />
    <!-- Bootstrap core CSS -->
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbar-static/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <!-- Meta Properties -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Simulateur de notes BTS SIO">
    <meta property="og:description" content="Simulez votre BTS SIO facilement en entrant les notes que vous estimez.">
    <meta property="og:image" content="https://notes.bastianfabre.fr/logo.png">
    <meta property="og:url" content="https://notes.bastianfabre.fr/">
  </head>
  <body>
    <h1> Simulateur de BTS SIO </h1>
    <br />
    <div class="container">
      <form method="get">
        <div class="row">
          <div class="col">
            <input type="number" step="1" min="0" max="20" maxlength="2" required class="form-control" name="culture" id="culture" placeholder="culture"> coef 2
          </div>
          <div class="col">
            <input type="number" step="1" min="0" max="20" maxlength="2" required class="form-control" name="anglais" id="anglais" placeholder="anglais"> coef 2
          </div>
          <div class="col">
            <input type="number" step="1" min="0" max="20" maxlength="2" required class="form-control" name="maths_ecrit" id="maths_ecrit" placeholder="maths_ecrit"> coef 2
          </div>
          <div class="col">
            <input type="number" step="1" min="0" max="20" maxlength="2" required class="form-control" name="maths_algo" id="maths_algo" placeholder="maths_algo"> coef 1
          </div>
          <div class="col">
            <input type="number" step="1" min="0" max="20" maxlength="2" required class="form-control" name="cejm" id="cejm" placeholder="cejm"> coef 3
          </div>
        </div>
        <div class="row">
          <div class="col">
            <input type="number" step="1" min="0" max="20" maxlength="2" required class="form-control" name="e4" id="e4" placeholder="e4"> coef 4
          </div>
          <div class="col">
            <input type="number" step="1" min="0" max="20" maxlength="2" required class="form-control" name="e5" id="e5" placeholder="e5"> coef 4
          </div>
          <div class="col">
            <input type="number" step="1" min="0" max="20" maxlength="2" required class="form-control" name="e6" id="e6" placeholder="e6"> coef 4
          </div>
          <div class="col">
            <input type="number" step="1" min="0" max="20" maxlength="2" class="form-control" name="lv2" id="lv2" placeholder="lv2"> pts > 10 coef 1
          </div>
          <div class="col">
            <input type="number" step="1" min="0" max="20" maxlength="2" class="form-control" name="math_app" id="math_app" placeholder="math_app"> pts > 10 coef 1
          </div>
          <div class="col">
            <input type="number" step="1" min="0" max="20" maxlength="2" class="form-control" name="certif" id="certif" placeholder="certif"> pts > 10 coef 1
          </div>
          <div class="col">
            <input type="submit" step="1" min="0" max="20" maxlength="2" class="btn btn-primary mb-3" name="submit" id="submit">
          </div>
      </form>
    </div>
    <br />
    <h3> La moyenne du BTS SIO est de : </h3>
    <h2 id="note"> Veuillez entrer vos notes </h2>
  </body>
</html> 
