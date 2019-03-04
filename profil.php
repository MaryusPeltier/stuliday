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
    <section id="profil-page">
        <div class="container">
            <div class="row">
            <div class="col-6 col-sm">
                <div class="module-profil">
                    <h2>PROFIL</h2>
                    <p>Moyenne des avis sur se profil :</p>
                    <h4><div class="star">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                        </div></h4>
                    <div class="titreVoyages">
                        <h3>SES VOYAGES</h3>
                        <a class="liens-voyages" href="">LISBONNE 26/08/2015</a></br>
                        <a class="liens-voyages" href="">ROME 25/06/2014</a>
                    </div>
                    <div class="titreAnnonces">
                        <h3>SES ANNONCES</h3>
                        <a class="liens-voyages" href="">PARIS du 17/06/2016 au 25/06/2016</a></br>
                        <a class="liens-voyages" href="">AMSTERDAM du 10/02/2017 au 13/02/2017</a>
                    </div>
                    <div class="titreCommentaires">
                        <h3>COMMENTAIRES</h3>
                        <div class="card-profil">
                        <div class="row">
                            <div class="col-6">
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
                            <div class="col-6">
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
                        </div>
                    </div>
                </div>
                    <div class="button-bottom">
                        <a class="buttonComment col-12" href="#">Commenter le Profil</a>
                        <a class="buttonMail col-12" href="#">Envoyer un mail</a>
                        <a class="buttonWarning col-12" href="#">Signaler le profil</a>
                    </div>
                </div>
            </div>
            <div class="module-profil-name-size col-6 col-sm">
                <div class="module-profil-nom">
                    <div class="row">
                        <div class="col-7">
                            <div class="module-profil-name">THOMAS</div>
                            <div class="module-profil-surname">DUBRAND</div>
                            <div class="module-profil-age">25 ans</div>
                            <div class="module-profil-city">Bordeaux</div>
                        </div>
                        <div class="col-5">
                            <div class="image-map"></div>
                        </div>
                    </div>
                </div>
                <div class="module-profil-pic">
                        <div class="row">
                            <div class="col-12">
                                <div class="image-profil"></div>
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