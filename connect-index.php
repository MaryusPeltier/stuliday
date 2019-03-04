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
    <?php 
        $page="slider";
        include_once('inc/slider.php');
    ?>

    <section id="presentation-webSite">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <img src="img/aeroport.jpg" alt="">
                </div>
                <div class="col-6">
                    <div class="paragraphePresentation">
                        <div class="titrePresentation">
                            <h3>Vous avez préparés votre voyage</h3>
                            <h3>Et un ami a du annuler !</h3>
                        </div>
                        <div class="textPresentation">
                            <h3>Ou, Quand, Comment, ...</h3>
                        </div>
                        <a href="creation-annonce.html"><button class="btn btn-info">Créez votre annonce</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="voyageurs">
        <div class="container">
            <h2>Voyageurs</h2>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <img src="img/ayo-ogunseinde.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="star">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <p class="card-text">Some quick example text to build on the card title and make up.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="img/adult-attractive.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="star">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                            </div>
                            <p class="card-text">Some quick example text to build on the card title and make up.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <a href="profil.html">
                    <div class="card">
                        <img src="img/rawpixel.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="star">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <p class="card-text">Some quick example text to build on the card title and make up.</p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="img/black-and-white.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="star">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </div>
                            <p class="card-text">Some quick example text to build on the card title and make up.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="img/attractive-background.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="star">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
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
                <div class="col-4">
                    <img src="img/montage_photo_hiver.jpg" alt="">
                    <p class="textColor">PLUSIEURS PACKAGES POUR LE GRAND FROID</p>
                    <h3 class="titrePackage">Skier dans les alpes cet hiver</h3>
                    <p class="paragraphePackage">Actique converso cruentam iustoque civili iustoque actique civili cruentam pars et et domus iam crudelitati praeter licentia et et necati imperio damnabantur quorum puniti relicto victitabant et actique cruentam necati.</p>
                </div>
                <div class="col-4">
                    <img src="img/Plage-montage.jpg" alt="">
                    <p class="textColor1">PLUSIEURS PACKAGES POUR LA PLAGE</p>
                    <h3 class="titrePackage">Bronzer sur la cote basque cet été</h3>
                    <p class="paragraphePackage">Actique converso cruentam iustoque civili iustoque actique civili cruentam pars et et domus iam crudelitati praeter licentia et et necati imperio damnabantur quorum puniti relicto victitabant et actique cruentam necati.</p>
                </div>
                <div class="col-4">
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
            <div class="col-3">
                <div class="card">
                    <img src="img/george-kedenburg-iii-560194-unsplash_copie.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="titleCard">
                            <i class="fas fa-map-marker-alt"></i>
                            <h5 class="card-title">Paris</h5>
                        </div>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <h6 class="card-subtitle mb-2 text-muted">Activités</h6>
                        <a href="#" class="hashtagActivites">#TourEffeil#BateauMouche#Louvre</a>
                        <div class="pricePlaces">
                            <p class="card-link">Places : 2</p>
                            <p class="card-link">Prix Global : 500€</p>
                        </div>
                    </div>
                </div>   
            </div>
            <div class="col-3">
                <div class="card">
                    <img src="img/benjamin-gremler-709986-unsplash_copie.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="titleCard">
                            <i class="fas fa-map-marker-alt"></i>
                            <h5 class="card-title">Barcelone</h5>
                        </div>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <h6 class="card-subtitle mb-2 text-muted">Activités</h6>
                        <a href="#" class="hashtagActivites">#TourEffeil#BateauMouche#Louvre</a>
                        <div class="pricePlaces">
                            <p class="card-link">Places : 2</p>
                            <p class="card-link">Prix Global : 500€</p>
                        </div>
                    </div>
                </div>   
            </div>
            <div class="col-3">
                <div class="card">
                    <img src="img/luca-micheli-422053-unsplash_copie.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="titleCard">
                            <i class="fas fa-map-marker-alt"></i>
                            <h5 class="card-title">Londres</h5>
                        </div>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <h6 class="card-subtitle mb-2 text-muted">Activités</h6>
                        <a href="#" class="hashtagActivites">#TourEffeil#BateauMouche#Louvre</a>
                        <div class="pricePlaces">
                            <p class="card-link">Places : 2</p>
                            <p class="card-link">Prix Global : 500€</p>
                        </div>
                    </div>
                </div>   
            </div>
            <div class="col-3">
                <div class="card">
                    <img src="img/mao-yuqing-1281298-unsplash_copie.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="titleCard">
                            <i class="fas fa-map-marker-alt"></i>
                            <h5 class="card-title">Rome</h5>
                        </div>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <h6 class="card-subtitle mb-2 text-muted">Activités</h6>
                        <a href="#" class="hashtagActivites">#TourEffeil#BateauMouche#Louvre</a>
                        <div class="pricePlaces">
                            <p class="card-link">Places : 2</p>
                            <p class="card-link">Prix Global : 500€</p>
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