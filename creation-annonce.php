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
                            <h2>Completer</h2> 
                            <h2 class="ecartLine">les informations</h2>
                            <p>Décrir un maximum son annonce</p> 
                            <p>pour une meilleure recherche</p>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="inputModuleCreation">
                              <form>
                                <h2>Etape 1</h2>
                                      <input type="text" class="form-control" placeholder="Où ?">
                                      <div class="input-group mb-3">
                                          <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                            <label class="custom-file-label" for="inputGroupFile01">Telecharger des images</label>
                                          </div>
                                        </div>
                                  <div class="form-row">
                                    <div class="col">
                                      <input type="text" class="form-control" placeholder="Quand ?">
                                    </div>
                                    <div class="col">
                                      <input type="text" class="form-control" placeholder="Voyageurs">
                                    </div>
                                  </div>
                                    <a href="creation-annonce-2.php"><button type="button" class="btn btn-primary w-100">Suivant</button></a>
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

