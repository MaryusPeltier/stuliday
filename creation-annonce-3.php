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
                            <h2>A combien</h2> 
                            <h2 class="ecartLine">partirez-vous ?</h2>
                            <p>Inscrivez le nombre de personne</p> 
                            <p>que vous seriez et le nombre de personne </p>
                            <p>manquante </p>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="inputModuleCreation">
                              <form>
                                <h2>Etape 3</h2>
                                      
                                  <div class="form-row">
                                    <div class="col-6">
                                        <h4>Vous êtes</h4>
                                      <input type="text" class="form-control-chiffre" placeholder="2">
                                    </div>
                                    <div class="col-6">
                                        <h4>Il manque</h4>
                                      <input type="text" class="form-control-chiffre" placeholder="3">
                                    </div>
                                  </div>
                                  
                                    <a href="creation-annonce-4.php"><button type="button" class="btn btn-primary w-100">Suivant</button></a>
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

