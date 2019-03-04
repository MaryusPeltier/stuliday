<nav class="navbar navbar-expand-lg navbar-light bg-white navbar-fixed-top position-fixed w-100">
            <div class="img-position">
                <img src="img/svgLogo.png">
            </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="creation-annonce.php">Proposer voyage</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Aide</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0 ">
                <button class="btn btn-outline-success my-2 my-sm-0" type="button" data-toggle="modal" data-target="#exampleModalCenter">Inscription / Connection</button>
              </form>
              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Inscription / Connection</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <form action="" class="loginForm">
                                <div class="container">
                                    <div class="input-group">
                                        <div class="col-12">
                                            <input type="text" id="name" class="form-control" placeholder="Adresse Mail">
                                        </div>
                                        <div class="col-12">
                                            <input type="password" id="paw" class="form-control" placeholder="Mot de passe">
                                        </div>
                                    </div>
                                    <div class="input-social">
                                        <div class="col-12">
                                            <button class="btn btn-primary btn-lg btn-block"><i class="fab fa-facebook-f"></i>Facebook</button>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-light btn-lg btn-block"><i class="fab fa-google"></i>Google</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer float-right">
                          <button type="button" class="btn btn-secondary"><a href="connect-index.php">Enregistrement</a></button>
                          <button type="button" class="btn btn-primary"><a href="connect-index.php">Connexion</a></button>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
          </nav>