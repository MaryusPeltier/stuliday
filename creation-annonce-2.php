<?php 
    $page="index";
    include_once('inc/inc_config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php 
        include_once('inc/head.php');
    ?>
</head>
<body>
<header>
        <?php 
        include_once('inc/navbar.php');
        ?>
    </header>
    <section id="creation1">
            <div class="background-image">
                <div class="container">
                  <div class="moduleBlanc">
                      <div class="row">
                        <div class="col-6">
                          <div class="textModule">
                            <h2>Vous n'êtes pas</h2> 
                            <h2 class="ecartLine">Encore inscrit ?</h2>
                            <p>Inscrivez vous directement</p> 
                            <p>Dans cette nouvelle étapes </p>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="inputModuleCreation">
                              <form>
                                <h2>Etape 2</h2>
                                      
                                  <div class="form-row">
                                    <div class="col">
                                      <input type="text" class="form-control" placeholder="Nom">
                                    </div>
                                    <div class="col">
                                      <input type="text" class="form-control" placeholder="Prenom">
                                    </div>
                                  </div>
                                  <input type="text" class="form-control" placeholder="Téléphone">
                                  <input type="text" class="form-control" placeholder="E-mail">
                                  <input type="text" class="form-control" placeholder="Mot de passe">
                                  <div class="form-row">
                                        <div class="col">
                                            <button class="btn btn-primary btn-lg btn-block"><i class="fab fa-facebook-f"></i> Facebook</button>
                                        </div>
                                        <div class="col">
                                            <button class="btn btn-light btn-lg btn-block"><i class="fab fa-google"></i> Google</button>
                                        </div>
                                    </div>
                                    <a href="creation-annonce-3.php"><button type="button" class="btn btn-primary w-100">Suivant</button></a>
                                </form>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
            </div>
    </section>
    <?php 
        include_once('inc/footer.php');
    ?>
    <?php 
        include_once('inc/script.php');
    ?>
  </body>
</html>

