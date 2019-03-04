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
                            <h2 class="ecartLine">Vous y êtes presque</h2>
                            <p>Si vous souhaitez faire du covoiturage,</p> 
                            <p>des activitées et une description</p>
                            <p>complémentaire de votre annonces</p>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="inputModuleCreation">
                              <form>
                                <h2>Etape 4</h2>
                                  <div class="form-row">
                                    <div class="col">
                                      <h5>Prix / personne</h5>
                                    </div>
                                    <div class="col-9">
                                      <input type="text" class="form-control" placeholder="150€">
                                    </div>
                                  </div>

                                <div class="col-12">
                                    <div class="controlValidation">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <h5>Covoiturage</h5>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline1">Oui</label>
                                      </div>
                                      <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline2">Non</label>
                                      </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="controlValidation">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <h5>Activitée(s)</h5>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline1">Oui</label>
                                      </div>
                                      <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline2">Non</label>
                                      </div>
                                    </div>
                                </div>
                                    
                                  <h5>Description Complémentaire</h5>
                                  <input type="text" class="form-control2" placeholder="Ecrivez un commentaire supplémentaire à votre annonce ..">
                                    <a href="profil-annonce.php"><button type="button" class="btn btn-primary w-100">Valider mon annonce</button></a>
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

