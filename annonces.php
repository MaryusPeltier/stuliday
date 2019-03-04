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
    <section id="searchAnnonce">
            <li class="searchAnnonceInput">
                  <form class="formAnnonceInput" action="#">
                      <div class="input-group col-10">
                          <input class="rome col" type="text" class="form-control" aria-label="" placeholder="Recherches Lieux, Activitées, ...">
                          <div class="input-group-append">
                            <input type="text" class="form-control-ronded col" aria-haspopup="true" aria-expanded="false" placeholder="10/12/2020">
                            <input type="text" class="form-control-ronded col" aria-haspopup="true" aria-expanded="false" placeholder="10/12/2020">
                            <input type="text" class="form-control-ronded col" aria-haspopup="true" aria-expanded="false" placeholder="Voyageurs">
                          </div>
                      </div>
                  </form>
            </li>
        <div class="buttonsFilterAnnonces">
            <div class="col-12">
            <button type="button" class="btn btn-white" data-toggle="modal" data-target="#exampleModalOne">
                    Prix
                  </button>
                  
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalOne" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                            <form>
                                <div class="form-row">
                                    <div class="col">
                                    <input type="text" class="form-control" placeholder="Min">
                                    </div>
                                    <div class="col">
                                    <input type="text" class="form-control" placeholder="Max">
                                    </div>
                                </div>
                            </form>
                        </div>
                      </div>
                    </div>
                  </div>
            <button type="button" class="btn btn-white" data-toggle="modal" data-target="#exampleModalTwo">
                    Voyageurs Total
                  </button>
                  
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalTwo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                            <select class="custom-select custom-select-sm">
                                <option selected>Max de Voyageurs Present</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>
                      </div>
                    </div>
                  </div>
            <button type="button" class="btn btn-white" data-toggle="modal" data-target="#exampleModalThree">
                    Types Logements
                  </button>
                  
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalThree" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                                <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Maison</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">Appartement</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                                        <label class="custom-control-label" for="customCheck3">Camping</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                                        <label class="custom-control-label" for="customCheck4">Auberges de Jeunesse</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck5">
                                        <label class="custom-control-label" for="customCheck5">Hotel</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck6">
                                        <label class="custom-control-label" for="customCheck6">Maison d'Hote</label>
                                </div>
                        </div>
                      </div>
                    </div>
                  </div>
            <button type="button" class="btn btn-white" data-toggle="modal" data-target="#exampleModalFor">
                    Co-voiturages
                  </button>
                  
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalFor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                            <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">Oui</label>
                            </div>
                            <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">Non</label>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
            <button type="button" class="btn btn-white" data-toggle="modal" data-target="#exampleModalFive">
                    Activitées
                  </button>
                  
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalFive" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                                <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio3">Oui</label>
                                </div>
                                <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio4">Non</label>
                                </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
    </section>
    <section class="breadcrumbAnnonce">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="connect-index.html">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Annonce</li>
                </ol>
            </nav>
        </div>
    </section>
    <section id="modulesAnnonces">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="col-12">
                        <div class="annonce1module">
                            <div class="row">
                                <div class="col-6">
                                    <a href="profil-annonce.html"><div class="annonce1image"></div></a>
                                </div>
                                <div class="col-6">
                                    <h5 class="titleModuleAnnonce">Auberge de Jeunesse</h5>
                                    <div class="locationModuleAnnonce"><a href="">Paris</a></div>
                                    <div class="priceModuleAnnonce"><p>500€ </p><p> 2 places</p></div>
                                    <p class="dateModuleAnnonce">Du 10/04/2019 au 20/04/2019</p>
                                    <p class="activitesModuleAnnonce">Activitées</p>
                                    <div class="hashtagModuleAnnonce">
                                        <div class="row">
                                            <a href="">#ToursEffeil </a>
                                            <a href=""> #Louvre</a>
                                        </div>
                                    </div>
                                    <p class="noteModuleAnnonce">Note Annonceur</p>
                                    <div class="star">
                                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div class="col-12">
                        <div class="annonce1module">
                            <div class="row">
                                <div class="col-6">
                                    <a href=""><div class="annonce2image"></div></a>
                                </div>
                                <div class="col-6">
                                    <h5 class="titleModuleAnnonce">Hotel</h5>
                                    <div class="locationModuleAnnonce"><a href="">Paris</a></div>
                                    <div class="priceModuleAnnonce"><p>550€ </p><p> 2 places</p></div>
                                    <p class="dateModuleAnnonce">Du 10/04/2019 au 20/04/2019</p>
                                    <p class="activitesModuleAnnonce">Activitées</p>
                                    <div class="hashtagModuleAnnonce">
                                        <div class="row">
                                            <a href="">#Musées</a>
                                            <a href=""> #JardinDesTuilleries</a>
                                        </div>
                                    </div>
                                    <p class="noteModuleAnnonce">Note Annonceur</p>
                                    <div class="star">
                                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div class="col-12">
                        <div class="annonce1module">
                            <div class="row">
                                <div class="col-6">
                                    <a href=""><div class="annonce3image"></div></a>
                                </div>
                                <div class="col-6">
                                    <h5 class="titleModuleAnnonce">Appartement</h5>
                                    <div class="locationModuleAnnonce"><a href="">Paris</a></div>
                                    <div class="priceModuleAnnonce"><p>600€ </p><p> 2 places</p></div>
                                    <p class="dateModuleAnnonce">Du 10/04/2019 au 20/04/2019</p>
                                    <p class="activitesModuleAnnonce">Activitées</p>
                                    <div class="hashtagModuleAnnonce">
                                        <div class="row">
                                            <a href="">#ToursEffeil </a>
                                            <a href=""> #BateauMouche</a>
                                        </div>
                                    </div>
                                    <p class="noteModuleAnnonce">Note Annonceur</p>
                                    <div class="star">
                                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div class="col-12">
                            <div class="annonce1module">
                                <div class="row">
                                    <div class="col-6">
                                        <a href="profil-annonce.html"><div class="annonce1image"></div></a>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="titleModuleAnnonce">Auberge de Jeunesse</h5>
                                        <div class="locationModuleAnnonce"><a href="">Paris</a></div>
                                        <div class="priceModuleAnnonce"><p>500€ </p><p> 2 places</p></div>
                                        <p class="dateModuleAnnonce">Du 10/04/2019 au 20/04/2019</p>
                                        <p class="activitesModuleAnnonce">Activitées</p>
                                        <div class="hashtagModuleAnnonce">
                                            <div class="row">
                                                <a href="">#ToursEffeil </a>
                                                <a href=""> #Louvre</a>
                                            </div>
                                        </div>
                                        <p class="noteModuleAnnonce">Note Annonceur</p>
                                        <div class="star">
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="col-12">
                            <div class="annonce1module">
                                <div class="row">
                                    <div class="col-6">
                                        <a href=""><div class="annonce2image"></div></a>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="titleModuleAnnonce">Hotel</h5>
                                        <div class="locationModuleAnnonce"><a href="">Paris</a></div>
                                        <div class="priceModuleAnnonce"><p>550€ </p><p> 2 places</p></div>
                                        <p class="dateModuleAnnonce">Du 10/04/2019 au 20/04/2019</p>
                                        <p class="activitesModuleAnnonce">Activitées</p>
                                        <div class="hashtagModuleAnnonce">
                                            <div class="row">
                                                <a href="">#Musées</a>
                                                <a href=""> #JardinDesTuilleries</a>
                                            </div>
                                        </div>
                                        <p class="noteModuleAnnonce">Note Annonceur</p>
                                        <div class="star">
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="col-12">
                            <div class="annonce1module">
                                <div class="row">
                                    <div class="col-6">
                                        <a href=""><div class="annonce3image"></div></a>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="titleModuleAnnonce">Appartement</h5>
                                        <div class="locationModuleAnnonce"><a href="">Paris</a></div>
                                        <div class="priceModuleAnnonce"><p>600€ </p><p> 2 places</p></div>
                                        <p class="dateModuleAnnonce">Du 10/04/2019 au 20/04/2019</p>
                                        <p class="activitesModuleAnnonce">Activitées</p>
                                        <div class="hashtagModuleAnnonce">
                                            <div class="row">
                                                <a href="">#ToursEffeil </a>
                                                <a href=""> #BateauMouche</a>
                                            </div>
                                        </div>
                                        <p class="noteModuleAnnonce">Note Annonceur</p>
                                        <div class="star">
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                </div>
                <div class="col-6">
                    <div class="mapAnnonce">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d41999.30188000112!2d2.312040007916766!3d48.85904241011674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1shotel!5e0!3m2!1sfr!2sfr!4v1548229383423" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
            <div class="container bottom_border">
            <div class="row">
            <div class=" col-sm-4 col-md col-sm-4  col-12 col">
            <h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
            <!--headin5_amrc-->
            <p class="mb10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            <p><i class="fa fa-location-arrow"></i> 9878/25 sec 9 rohini 35 </p>
            <p><i class="fa fa-phone"></i>  +91-9999878398  </p>
            <p><i class="fa fa fa-envelope"></i> info@example.com  </p>
            
            
            </div>
            
            
            <div class=" col-sm-4 col-md  col-6 col">
            <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
            <!--headin5_amrc-->
            <ul class="footer_ul_amrc">
            <li><a href="http://kalarikendramdelhi.com">Image Rectoucing</a></li>
            <li><a href="http://kalarikendramdelhi.com">Clipping Path</a></li>
            <li><a href="http://kalarikendramdelhi.com">Hollow Man Montage</a></li>
            <li><a href="http://kalarikendramdelhi.com">Ebay & Amazon</a></li>
            <li><a href="http://kalarikendramdelhi.com">Hair Masking/Clipping</a></li>
            <li><a href="http://kalarikendramdelhi.com">Image Cropping</a></li>
            </ul>
            <!--footer_ul_amrc ends here-->
            </div>
            
            
            <div class=" col-sm-4 col-md  col-6 col">
            <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
            <!--headin5_amrc-->
            <ul class="footer_ul_amrc">
            <li><a href="http://kalarikendramdelhi.com">Remove Background</a></li>
            <li><a href="http://kalarikendramdelhi.com">Shadows & Mirror Reflection</a></li>
            <li><a href="http://kalarikendramdelhi.com">Logo Design</a></li>
            <li><a href="http://kalarikendramdelhi.com">Vectorization</a></li>
            <li><a href="http://kalarikendramdelhi.com">Hair Masking/Clipping</a></li>
            <li><a href="http://kalarikendramdelhi.com">Image Cropping</a></li>
            </ul>
            <!--footer_ul_amrc ends here-->
            </div>
            
            
            <div class=" col-sm-4 col-md  col-12 col">
            <h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
            <!--headin5_amrc ends here-->
            
            <ul class="footer_ul2_amrc">
            <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
            <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
            <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>Lorem Ipsum is simply dummy text of the printing...<a href="#">https://www.lipsum.com/</a></p></li>
            </ul>
            <!--footer_ul2_amrc ends here-->
            </div>
            </div>
            </div>
            
            
            <div class="container">
            <ul class="foote_bottom_ul_amrc">
            <li><a href="http://kalarikendramdelhi.com">Home</a></li>
            <li><a href="http://kalarikendramdelhi.com">About</a></li>
            <li><a href="http://kalarikendramdelhi.com">Services</a></li>
            <li><a href="http://kalarikendramdelhi.com">Pricing</a></li>
            <li><a href="mentions-legales.html">Mentions Legales</a></li>
            <li><a href="http://kalarikendramdelhi.com">Contact</a></li>
            </ul>
            <!--foote_bottom_ul_amrc ends here-->
            <p class="text-center">Copyright @2017 | Designed With by <a href="#">M-art Studio</a></p>
            
            <ul class="social_footer_ul">
            <li><a href="http://kalarikendramdelhi.com"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="http://kalarikendramdelhi.com"><i class="fab fa-twitter"></i></a></li>
            <li><a href="http://kalarikendramdelhi.com"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="http://kalarikendramdelhi.com"><i class="fab fa-instagram"></i></a></li>
            </ul>
            <!--social_footer_ul ends here-->
            </div>
            
            </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.js"></script>
    <script src="https://steven.codes/typerjs/typer.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>