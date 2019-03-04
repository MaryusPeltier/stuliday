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
    <section>
        <div class="buttons">
            <div class="container">
                <div class="col-12">
            <ul>
              <li><a href="#slide0" id="slide0" class="slides col col-sm col-md">Lieux</a></li>
              <li><a href="#slide1" id="slide1" class="slides col col-sm col-md">Activites</a></li>
              <li><a href="#slide2" id="slide2" class="slides col col-sm col-md">Covoiturage</a></li>
              <li><a href="#slide3" id="slide3" class="slides col col-sm col-md">Packages</a></li>
              
              
            </ul>
            </div>
            </div>
          </div>
          <ul class="bxslider">
            <li class="bora-bora">
              <div class="container">
                  <div class="titre-carousel">
                      <h2>Preparez votre future voyage</h2>
                      <h2 class="titre2">partez à
                        <span class="typer" id="main" data-words="LISBONNE,PARIS,LONDRES,BRUXELLES" data-colors="#6acaca" data-delay="100" data-deleteDelay="1000"></span>
                        <span class="cursor" data-owner="main"></span>
                      </h2>
                  </div>
              </div>
            <form action="#">
                <div class="col-12">
                <div class="input-group container">
                    <input class="rome col col-md col-sm-12" type="text" class="form-control" aria-label="" placeholder="Rome">
                    <div class="input-group-append">
                      <input type="text" class="form-control-ronded col col-md col-sm-12" aria-haspopup="true" aria-expanded="false" placeholder="10/12/2020">
                      <input type="text" class="form-control-ronded col col-md col-sm-12" aria-haspopup="true" aria-expanded="false" placeholder="Voyageurs">
                    </div>
                    <div class="input-group-append">
                          <button class="btn-rounded btn-light rounded-right col col-md col-sm-12" type="button" ><link rel="stylesheet" href=""><i class="fas fa-search"></i></button>
                    </div>
                </div>
                </div>
            </form>
              
            </li>
            <li class="montagne">
                <div class="container">
                    <div class="titre-carousel">
                        <h2>Amusez-vous à plusieurs</h2>
                        <h2 class="titre2">Allez faire 
                                <span class="typer" id="main" data-words="DU SKI,DU SURF,DU KAYAK,DE LA PECHE" data-colors="#6acaca" data-delay="100" data-deleteDelay="1000"></span>
                                <span class="cursor" data-owner="main"></span>
                        </h2>
                    </div>
                </div>
              <form action="#">
                  <div class="input-group container">
                      <input class="rome col" type="text" class="form-control" aria-label="" placeholder="Activités Nautiques">
                      <div class="input-group-append">
                        <input type="text" class="form-control-ronded col" aria-haspopup="true" aria-expanded="false" placeholder="10/12/2020">
                        <input type="text" class="form-control-ronded col" aria-haspopup="true" aria-expanded="false" placeholder="Participants">
                      </div>
                      <div class="input-group-append">
                            <button class="btn-rounded btn-light rounded-right col" type="button" ><link rel="stylesheet" href=""><i class="fas fa-search"></i></button>
                      </div>
                  </div>
              </form>
              </li>
              <li class="van-covoit">
                  <div class="container">
                      <div class="titre-carousel">
                          <h2>Vous voulez partagez votre trajet</h2>
                          <h2 class="titre2">partez avec 
                                <span class="typer" id="main" data-words="PAUL,JEANNE,LEA,JULIEN,MANON" data-colors="#6acaca" data-delay="100" data-deleteDelay="1000"></span>
                                <span class="cursor" data-owner="main"></span>
                          </h2>
                      </div>
                  </div>
                <form action="#">
                    <div class="input-group container">
                        <input class="rome col" type="text" class="form-control" aria-label="" placeholder="Je dois allez à Paris">
                        <div class="input-group-append">
                          <input type="text" class="form-control-ronded col" aria-haspopup="true" aria-expanded="false" placeholder="10/12/2020">
                          <input type="text" class="form-control-ronded col" aria-haspopup="true" aria-expanded="false" placeholder="Places">
                        </div>
                        <div class="input-group-append">
                              <button class="btn-rounded btn-light rounded-right col" type="button" ><link rel="stylesheet" href=""><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>
                </li>
                <li class="desk">
                    <div class="container">
                        <div class="titre-carousel">
                            <h2>Preparez votre voyage de A à Z</h2>
                            <h2 class="titre2">Lieux, activités, covoiturages, ...</h2>
                        </div>
                    </div>
                  <form action="#">
                      <div class="input-group container">
                          <input class="rome col" type="text" class="form-control" aria-label="" placeholder="Barcelone">
                          <div class="input-group-append">
                            <input type="text" class="form-control-ronded col" aria-haspopup="true" aria-expanded="false" placeholder="Surf">
                            <input type="text" class="form-control-ronded col" aria-haspopup="true" aria-expanded="false" placeholder="Voyageurs">
                          </div>
                          <div class="input-group-append">
                                <button class="btn-rounded btn-light rounded-right col" type="button" ><link rel="stylesheet" href=""><i class="fas fa-search"></i></button>
                          </div>
                      </div>
                  </form>
                </li>
          </ul>
    </section>
    <section id="presentation-webSite">
        <div class="container">
            <div class="col-12">
            <div class="row">
                <div class="col-6">
                    <div class="backgroundImagePresentation"></div>
                </div>
                <div class="col-6">
                    <div class="paragraphePresentation ">
                        <div class="titrePresentation">
                            <h3>Vous avez préparés votre voyage</h3>
                            <h3>Et un ami a du annuler !</h3>
                        </div>
                        <div class="textPresentation">
                            <h3>Ou, Quand, Comment, ...</h3>
                        </div>
                        <button class="btn btn-info">Créez votre annonce</button>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <section id="voyageurs">
        <div class="container">
            <h2>Voyageurs</h2>
            <div class="row">
                <div class="col col-sm col-xs">
                    <div class="card col-sm-12 col-xs-12">
                        <img src="img/ayo-ogunseinde.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="star">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <p class="card-text">Some quick example text to build on the card title and make up.</p>
                        </div>
                    </div>
                </div>
                <div class="col col-sm col-xs">
                    <div class="card col-sm-12 col-xs-12">
                        <img src="img/adult-attractive.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="star">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                            </div>
                            <p class="card-text">Some quick example text to build on the card title and make up.</p>
                        </div>
                    </div>
                </div>
                <div class="col col-sm col-xs">
                    <div class="card col-sm-12 col-xs-12">
                        <img src="img/rawpixel.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="star">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <p class="card-text">Some quick example text to build on the card title and make up.</p>
                        </div>
                    </div>
                </div>
                <div class="col col-sm col-xs">
                    <div class="card col-sm-12 col-xs-12">
                    <div class="card ">
                        <img src="img/black-and-white.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="star">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </div>
                            <p class="card-text">Some quick example text to build on the card title and make up.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="packages">
        <div class="container">
            <h2>Packages</h2>
            <div class="row">
                <div class="col-md-4">
                    <img src="img/montage_photo_hiver.jpg" alt="">
                    <p class="textColor">PLUSIEURS PACKAGES POUR LE GRAND FROID</p>
                    <h3 class="titrePackage">Skier dans les alpes cet hiver</h3>
                    <p class="paragraphePackage">Actique converso cruentam iustoque civili iustoque actique civili cruentam pars et et domus iam crudelitati praeter licentia et et necati imperio damnabantur quorum puniti relicto victitabant et actique cruentam necati.</p>
                </div>
                <div class="col-md-4">
                    <img src="img/Plage-montage.jpg" alt="">
                    <p class="textColor1">PLUSIEURS PACKAGES POUR LA PLAGE</p>
                    <h3 class="titrePackage">Bronzer sur la cote basque cet été</h3>
                    <p class="paragraphePackage">Actique converso cruentam iustoque civili iustoque actique civili cruentam pars et et domus iam crudelitati praeter licentia et et necati imperio damnabantur quorum puniti relicto victitabant et actique cruentam necati.</p>
                </div>
                <div class="col-md-4">
                    <img src="img/Attraction.jpg" alt="">
                    <p class="textColor2">PLUSIEURS PACKAGES DE LOISIRS</p>
                    <h3 class="titrePackage">Port Aventura ? Pourquoi pas..</h3>
                    <p class="paragraphePackage">Actique converso cruentam iustoque civili iustoque actique civili cruentam pars et et domus iam crudelitati praeter licentia et et necati imperio damnabantur quorum puniti relicto victitabant et actique cruentam necati.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="lastAnnonces">
        <h2>Dernieres Annonces</h2>
        <div class="row">
            <?php allArticlesDisplay();?>
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

