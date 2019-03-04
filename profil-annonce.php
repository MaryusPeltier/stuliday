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
    <section class="breadcrumbAnnonce2">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="connect-index.html">Accueil</a></li>
                <li class="breadcrumb-item"><a href="annonces.html">Annonces</a></li>
                <li class="breadcrumb-item active" aria-current="page">Auberges de Jeunesse</li>
                </ol>
            </nav>
        </div>
    </section>
    <section id="galery-images">
        <div class="d-flex flex-wrap">
            <div class="col-md-8 col-sm-12">
                <div class="fullWidth" src="#" alt=""></div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="image-link1">
                    <div class="image1" src="#" alt=""></div>
                </div>
                <div class="image-link2">
                    <div class="image2" src="#" alt=""></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                    <div class="image3" src="#" alt=""></div>
            </div>
            <div class="col-md-4 col-sm-6">
                    <div class="image4" src="#" alt=""></div>
            </div>
            <div class="col-md-4 col-sm-6">
                    <div class="image5" src="#" alt=""></div>
            </div>
        </div>
    </section>
    <section id="presentation-annonce">
        <div class="container">
            <div class="module-presentation">
                <div class="row">
                    <div class="col-5">
                        <div class="module-presentation-text">
                            <div class="info-price">
                                <h2>Prix : 500€</h2>
                                <h2>Places : 2</h2>
                            </div>
                            <h3>Auberge de Jeunesse</h3>
                            <div class="info-price">
                                <h4>2 <i class="fas fa-user"></i></h4>
                                <h4>Covoiturage : Oui</h4>
                            </div>
                            <div class="info-activitees">
                                <h3>ACTIVITEES</h3>
                                <li class="link1" href="#">#TourEffeil #BateauxMouches #Louvre</li>
                                <li class="link2" href="#"><i class="fas fa-calendar"></i> Du 10/04/2019 au 20/04/2019</li>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="imageMap"><iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d41999.30188000112!2d2.312040007916766!3d48.85904241011674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1shotel!5e0!3m2!1sfr!2sfr!4v1548229383423" width="100%" height="100%" frameborder="0" style="padding-bottom:0" allowfullscreen></iframe></div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <img src="img/attractive-background.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="star">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                                </div>
                                <p class="card-text"><i class="fas fa-map-marker"></i> Paris</p>
                                <button class="btn btn-light col-12">Reserver</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="informations-annonces">
        <div class="container">
            <h2>Informations</h2>
            <p>Post haec indumentum regale quaerebatur et ministris fucandae purpurae tortis confessisque pectoralem tuniculam sine manicis textam, Maras nomine quidam inductus est ut appellant Christiani diaconus, cuius prolatae litterae scriptae Graeco sermone ad Tyrii textrini praepositum celerari speciem perurgebant quam autem non indicabant denique etiam idem ad usque discrimen vitae vexatus nihil fateri conpulsus est.</p>
            <p>Post haec indumentum regale quaerebatur et ministris fucandae purpurae tortis confessisque pectoralem tuniculam sine manicis textam, Maras nomine quidam inductus est ut appellant Christiani diaconus, cuius prolatae litterae scriptae Graeco sermone ad Tyrii textrini praepositum celerari speciem perurgebant quam autem non indicabant denique etiam idem ad usque discrimen vitae vexatus nihil fateri conpulsus est.</p>
        </div>
    </section>
    <section id="commentaires-annonces">
        <div class="container">
            <h2>Commentaires</h2>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Posez vos questions ..." aria-label="Posez vos questions ..." aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Envoyer</button>
                </div>
            </div>
            <div class="bulleCommentaireVoyageurs">
                <div class="col-2">
                    <img src="img/ayo-ogunseinde.jpg" alt="">
                </div>
                <div class="col-10">
                    <p>ost haec indumentum regale quaerebatur et ministris fucandae purpurae tortis confessisque pectoralem tuniculam sine manicis textam, Maras nomine quidam inductus est ut appellant Christiani diaconus,</p>
                </div>
            </div>
            <div class="bulleCommentaireHote">
                <div class="col-10">
                    <p>ost haec indumentum regale quaerebatur et ministris fucandae purpurae tortis confessisque pectoralem tuniculam sine manicis textam, Maras nomine quidam inductus est ut appellant Christiani diaconus,</p>
                </div>
                <div class="col-2">
                    <img src="img/attractive-background.jpg" alt="">
                </div>
            </div>
            <div class="bulleCommentaireVoyageurs">
                <div class="col-2">
                    <img src="img/adult-attractive.jpg" alt="">
                </div>
                <div class="col-10">
                    <p>ost haec indumentum regale quaerebatur et ministris fucandae purpurae tortis confessisque pectoralem tuniculam sine manicis textam, Maras nomine quidam inductus est ut appellant Christiani diaconus,</p>
                </div>
            </div>
            <div class="col-12">
                <div class="pagination justify-content-center">
                    <button class="moreView">Afficher Plus</button>
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