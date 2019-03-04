<?php
    session_start();  // Ouverture de $_SESSION
    if( !isset($_SESSION['user']) && $page != 'login' &&  $page != 'signup'){
       // header('Location: login.php');
    }

    define('WEBSITE_NAME', 'My Blog');
    date_default_timezone_set('Europe/Berlin');
    ini_set('display_errors', 1);
    error_reporting(E_ALL);  // Same as: ini_set('error_reporting', E_ALL);

    // Création de variables pour des soucis de lecture / modification
    $sql_host = "localhost";
    $sql_admin = "root";
    $sql_password = "";
    $sql_bdd = "stuliday";

// Méthode 1 en MYSQLI :
//    define("MYSQL_CONN_ERROR", "Unable to connect to database.");
//     // Ensure reporting is setup correctly
//     mysqli_report(MYSQLI_REPORT_STRICT);
//     // Connect function for database access
//    try {
//       $mysqli = new mysqli($sql_host, $sql_admin, $sql_password, $sql_bdd);
//       $mysqli->set_charset("utf8");
//    } catch (Exception $e) {
//       echo $e->errorMessage();
//    }



// Méthode 2 en MYSQLI :
// Connexion au Serveur SQL
 $db= mysqli_connect($sql_host, $sql_admin, $sql_password) or die("Impossible de se connecter au serveur de la BDD.");
// Choix de la BDD dans le serveur SQL
 mysqli_select_db($db, $sql_bdd) or die("Impossible de sélectionner la BDD.");
 mysqli_set_charset($db, 'utf8');

// Fichier inc_tools.php qui nous permettra d'inclure des fonctions ou codes tiers
// include('inc/inc_tools.php');






// Récupérer tous les articles
function allArticlesDisplay(){
    global $db;
    $sql_request = "SELECT * FROM articles ORDER BY publish_date_article DESC LIMIT 4";
    if ($sql_article = mysqli_query( $db, $sql_request)) {
        while ($row=mysqli_fetch_object($sql_article)) {
        ?>
        <div class="col-md-3">
                <a href="profil-annonce.html">
                <div class="card">
                    <img src="<?php echo $row->image_url;?>" class="card-img-top" alt="..." width=100% height=10%>
                    <div class="card-body">
                        <div class="titleCard">
                            <i class="fas fa-map-marker-alt"></i>
                            <h5 class="card-title"><?php echo $row->city_article; ?></h5>
                        </div>
                        <p class="card-text"><?php 
                        echo(substr($row->contenu_article,0,100)); ?>...
                        </p>
                        <h6 class="card-subtitle mb-2 text-muted">Activités</h6>
                        <a href="#" class="hashtagActivites">#TourEffeil#BateauMouche#Louvre</a>
                        <div class="pricePlaces">
                            <p class="card-link">Places : <?php echo $row->categorie_article; ?></p>
                            <p class="card-link">Prix Global : <?php echo $row->price_article; ?>€</p>
                        </div>
                    </div>
                </div>
                </a>
            </div>

        <?php
        }
        $sql_article->free();
    }
// $mysqli->close();
}

?>
