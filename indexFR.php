<!DOCTYPE html>
<html lang="fr">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  
    <title>Home</title>
  
    <!-- Bootstrap core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
    <!-- Custom fonts for this template -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
      type="text/css">
  
    <!-- Custom styles for this template -->
    <link href="assets/css/landing-page.min.css" rel="stylesheet">
  
  </head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#"> </a>
            <img class="logo" src="assets/img/Logo1 Versie2.PNG">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="ml-auto navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="indexFR.php#Home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="indexFR.php#Informatie">Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="indexFR.php#Team">Notre &eacute;quipe</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="LogboekFR.html">Journal</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Langues
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="index.php"><img src= "assets/img/belgium.png">NL</a>
                      <a class="dropdown-item" href="indexFR.php"><img src= "assets/img/france.png">FR</a>
                      <a class="dropdown-item" href="indexEN.php"><img src= "assets/img/united-kingdom.png">ENG</a>
                  </div>
                </li>
            </ul>
            <form action="inloggen.php">
              <button class="btn btn-primary signinbtn" type="submit">se connecter</button>
           </form>
        </div>
    </div>
  </nav>

  <!-- Header van de pagina -->
  <a name="Home"></a>
  <!-- Link stukje -->
  <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5">Bienvenue sur notre site web!</h1>
          <p>
            Bonjour, nous sommes Bart Roels et Koen Van Der Plas et nous sommes étudiants en informatique et en réseautage au Collège Oscar Romero. 
            Pour notre essai intégré ou GIP nous avons choisi de créer un site Internet pour le Garage Mertens, 
            situé à Termonde. Comme nom de notre projet, nous avons choisi « Automotive Checker ». Ce nom renvoie donc 
            immédiatement à la raison de notre projet: l'automatisation est un problème. Bart est le fils de Caroline van de Voorde et 
            elle est responsable de service chez Garage Mertens, ce qui explique également le lien avec l'entreprise.
          </p>
          <br>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
        <form method="POST" action="register.php">
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input name="email" type="email" class="form-control form-control-lg" placeholder="entrez votre email...">
              </div>
              <div class="col-12 col-md-3">
                  <button type="submit" class="btn btn-block btn-lg btn-primary">S'inscrire</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </header>
  <header>



  </header>
  <!-- Icons Grid -->
  <a name="Informatie"></a>
  <!-- Link stukje -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-energy m-auto text-primary"></i>
            </div>
            <h3>La raison?</h3>
            <p class="lead mb-0">Quelle est la raison de ce projet ? Pourquoi avons-nous lancé ce projet ?</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-target m-auto text-primary"></i>
            </div>
            <h3>L'objectif?</h3>
            <p class="lead mb-0">Quels sont nos objectifs derrière ce projet, tant sur le plan personnel qu'externe ?</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-check m-auto text-primary"></i>
            </div>
            <h3>Le résultat?</h3>
            <p class="lead mb-0">Comment voyons-nous le résultat final ?</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Showcase stukje met foto's -->
  <section class="showcase">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/Lamp.jpg');"> </div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>La raison du projet?</h2>
          <p class="lead mb-0">
            Garage Mertens s'est demandé comment augmenter l'efficacité lors 
            de l'inspection des voitures neuves. <br> </br>

            Le garage est confronté avec le problème que le contrôle des nouvelles voitures, pour le moment, 
            ne fonctionne pas efficacement. Lors de l'entrée du- véhicule, 
            il faut vérifier s'il a subi des dommages pendant le transport et/ou la livraison. <br> </br>

            Après la réception et le premier contrôle du véhicule, il y a plusieurs contrôles périodiques que les employés doivent effectuer. 
            La prochaine date limite viendra après 6 semaines. 
            Après cela, d'autres délais doivent être respectés. Le contrôle est refait au bout de 3 mois, 
            après 6 mois et enfin après 12 mois.<br> </br>

            Cette procédure se fait toujours sur papier. Il s'agit d'un formulaire spécifique qui suit tout le parcours de chaque véhicule, 
            de la réception à l'inspection initiale des dommages jusqu’à la vente. <br> </br>

            Nous sommes très motivés pour convertir notre formation, tant la théorie que les nombreux exercices, en ce projet, 
            d'autant plus que notre programme sera effectivement utilisé dans la vie quotidienne.
          </p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" style="background-image: url('assets/img/Handen.jpg');"></div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2>L'objectif?</h2>
          <p class="lead mb-0">
            Notre objectif, envers l'entreprise, est d'automatiser et de digitaliser un processus manuel.</br>
            En faisant cela, nous voulons atteindre plusieurs objectifs: </br>
            - Augmenter l'efficacité </br>
            - Plus de contrôles internes </br>
            - Rappels automatiques </br>
            - Travailler plus écologiquement

            <br> </br>
            Les objectifs que nous en tant qu'étudiant souhaitons atteindre avec ce projet sont principalement 
            de mettre en pratique nos connaissances théoriques. 
            Notre expérience dans la pratique est encore limitée, mais au cours de nos études, nous avons reçu de nombreux formations pratiques. 
            C'est pourquoi nous essayons de mettre nos connaissances en pratique avec ce projet plus grande. <br> </br>
            L'un de nos objectifs est également d'apprendre à communiquer avec divers utilisateurs finaux. 
            À la fois des clients finaux avec des connaissances techniques mais aussi des clients finaux sans connaissances techniques.
          </p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/Code.jpg');">
        </div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Le résultat final</h2>
          <p class="lead mb-0">
            Le but ultime de notre projet est de digitaliser et d'automatiser toute la procédure des contrôles. Cela implique plusieurs éléments.  <br> </br>

            Nous faisons cela en fournissant une base de données qui enregistre toutes les données et dans laquelle 
            la plus grande quantité de données possible est récupérée pour chaque voiture.
            La recherche dans toutes les informations sera simple et rapide et cela peut donc se faire à partir de n'importe quel élément, 
            par exemple au moyen du numéro de châssis, via le type de voiture, via la date de livraison….<br> </br>

            Comme résultat final de notre projet, nous voulons avoir un site Web entièrement fonctionnel prêt, 
            qui peut être utilisé facilement et en douceur par les employés du garage. 
            Ce site Web sera connecté à la base de données où toutes les données actuelles sont déjà repris et 
            où les nouvelles données peuvent facilement être ajoutées par les utilisateurs via des écrans de saisie.<br> </br>

        </div>
      </div>
    </div>
  </section>

  <!-- Team -->
  <a name="Team"></a>
  <!--Linkstukje -->
  <section class="testimonials text-center bg-light">
    <div class="container">
      <h2 class="mb-5">Notre &eacute;quipe:</h2>
      <div class="row">
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="assets/img/Bart.jpg" alt="">
            <h5>Bart Roels <br>Développeur</h5>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="assets/img/Koen.jpg" alt="">
            <h5>Koen Van Der Plas<br>Développeur</h5>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="assets/img/Mama.jpg" alt="">
            <h5>Caroline Van De Voorde <br>Personne de contact</h5>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="call-to-action text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h2 class="mb-4">Intéressé? Alors inscrivez-vous rapidement</h2>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
        <form method="POST" action="register.php">
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input name="email" type="email" class="form-control form-control-lg" placeholder="entrez votre email...">
              </div>
              <div class="col-12 col-md-3">
                  <button type="submit" class="btn btn-block btn-lg btn-primary">S'inscrire</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="indexFR.php#Home">Home</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="ErrorPage/ErrorPage.html">Contact</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="PrivacyPolicy.html">Privacy Policy</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; Bart Roels 2020. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="https://www.facebook.com/profile.php?id=100009685365290">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.instagram.com/bart__roels/?hl=en">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>