<!DOCTYPE html>
<html lang="nl">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Home</title>
  <link rel="shortcut icon" type="image/jpg" href="assets/img/favicon.ico"/>

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
                  <a class="nav-link" href="index.php#Home">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="index.php#Informatie">Informatie</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="index.php#Team">Ons team</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="Logboek.html">Logboek</a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Taal
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="index.php"><img src= "assets/img/belgium.png">NL</a>
                    <a class="dropdown-item" href="indexFR.php"><img src= "assets/img/france.png">FR</a>
                    <a class="dropdown-item" href="indexEN.php"><img src= "assets/img/united-kingdom.png">ENG</a>
                </div>
              </li>
          <form action="inloggen.php">
            <button class="btn btn-primary signinbtn" type="submit">Inloggen</button>
         </form>
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
          <h1 class="mb-5">Welkom op onze website!</h1>
          <p>
            Hallo wij zijn Bart Roels en Koen Van Der Plas en wij zijn studenten IT&Netwerkren aan het Oscar Romero College. Voor onze geïntegreerde proef of 
            GIP hebben we ervoor gekozen om een website te maken voor Garage Mertens, gelegen te Dendermonde. Als naam voor ons project hebben we gekozen voor 
            ‘Automotive Checker’. Deze naam verwijst dan ook onmiddellijk naar de reden van ons project : het automatiseren een probleem. 
            Bart is de zoon van Caroline van de voorde en zij is service Manger in Garage Mertens, Dit  verklaard ook meteen de link met de firma.
          </p>
          <br>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form method="POST" action="register.php">
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input name="email" type="email" class="form-control form-control-lg" placeholder="Voer hier u email in...">
              </div>
              <div class="col-12 col-md-3">
                  <button type="submit" class="btn btn-block btn-lg btn-primary">Aanmelden</button>
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
  <!-- Link stukje               -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div  class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-energy m-auto text-primary"></i>
            </div>
            <h3>Reden?</h3>
            <p class="lead mb-0">Wat is de reden achter dit project? Waarom zijn we met dit project begonnen?</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-target m-auto text-primary"></i>
            </div>
            <h3>Doel?</h3>
            <p class="lead mb-0">Wat zijn onze doelen achter dit project? Zowel persoonlijk als extern?</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-check m-auto text-primary"></i>
            </div>
            <h3>Resultaat?</h3>
            <p class="lead mb-0">Hoe zien wij het eindresultaat?</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Showcase stukje met foto's -->
  <section class="showcase">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <a name="Reden"></a>
        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/Lamp.jpg');"> </div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Reden?</h2>
          <p class="lead mb-0">
            Garage Mertens stelde zichzelf de vraag hoe ze de efficiëntie kunnen verhogen tijdens de
            controle van nieuwe stockwagens. <br> </br>

            De garage kampt met het probleem dat de controle op nieuwe stockwagens, op dit moment, niet efficiënt
            verloopt. Bij het binnenkomen van het voertuig dient er nagekeken te worden of deze enige schade heeft
            opgelopen bij het transporteren en/of afleveren.<br> </br>

            Na de ontvangst en eerste check van het voertuig, zijn er nog verschillende periodieke controles die de
            medewerkers moeten uitvoeren. De eerstvolgende deadline komt er na 6 weken. Hierna zijn er nog meer
            deadlines die moeten gerespecteerd worden. De controle wordt opnieuw uitgevoerd na 3 maanden, na 6 maanden
            en ten slotte na 12 maanden.<br> </br>

            Deze procedure wordt nog steeds op papier gedaan. Het gaat hier over één specifiek formulier die de hele weg
            van elk voertuig, van het in ontvangst nemen tot de eerste controle op schade tot aan de verkoop, mee
            volgt.<br> </br>

            Wij zijn zeer gemotiveerd om onze opleiding, zowel de theorie als de vele oefeningen, om te zetten in dit
            project en al zeker omdat ons programma wel degelijk in het dagdagelijkse leven gebruikt zal worden.
          </p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" style="background-image: url('assets/img/Handen.jpg');"></div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2>Doel?</h2>
          <p class="lead mb-0">
            Ons doel, naar de firma toe, is om een manueel proces te automatiseren en digitaliseren.</br>
            Door dit te doen willen we verschillende doelen bereiken :</br>
            - Efficiëntie verhogen</br>
            - Meer interne controles</br>
            - Automatische herinneringen</br>
            - Meer ecologisch werken
            <br> </br>
            De doelen die wij als leerling met dit project willen bereiken is vooral om onze theoretische kennis om te
            zetten in de praktijk. Onze ervaring in de praktijk is nog beperkt, maar tijdens onze studie hebben we veel
            praktische vakken gekregen. Daarom proberen wij met dit groter project onze kennis om te zetten in de
            praktijk. Ook één van onze doelen is het leren communiceren met diverse eindklanten. Zowel eindklanten met
            technische kennis maar ook eindklanten zonder technische kennis.
          </p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/Code.jpg');">
        </div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Eindresultaat</h2>
          <p class="lead mb-0">
            De uiteindelijke bedoeling van ons project is om de hele procedure van de controles te digitaliseren en te
            automatiseren. Dit houdt verschillende elementen in. <br> </br>

            Dit doen we door een database te voorzien die alle gegevens herneemt en waarbij er voor elke wagen
            een zo groot mogelijk aantal gegevens hernomen worden. Er zal snel en makkelijk gezocht kunnen worden
            doorheen alle informatie en dit kan dan ook vanuit elk element, bijvoorbeeld door middel van het
            chassisnummer, via het type van auto, via de datum van levering….<br> </br>

            Wij willen als eindresultaat van ons project, een volledig werkende website klaar hebben, die door de
            werknemers van de garage makkelijk en vlot kan gebruikt worden. Deze website zal in verbinding staan met de
            database waar al de huidige gegevens reeds in verwerkt zitten en waarbij de nieuwe gegevens makkelijk
            toegevoegd kunnen worden door de gebruikers via invulschermen.<br> </br>

        </div>
      </div>
    </div>
  </section>

  <!-- Team -->
  <a name="Team"></a>
  <!--Linkstukje -->
  <section class="testimonials text-center bg-light">
    <div class="container">
      <h2 class="mb-5">Ons team: </h2>
      <div class="row">
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="assets/img/Bart.jpg" alt="">
            <h5>Bart Roels <br>Developer</h5>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="assets/img/Koen.jpg" alt="">
            <h5>Koen Van Der Plas<br>Developer</h5>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="assets/img/Mama.jpg" alt="">
            <h5>Caroline Van De Voorde <br>Contactpersoon</h5>
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
          <h2 class="mb-4">Geinteresseerd? Meld je dan snel aan!</h2>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
        <form method="POST" action="register.php">
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input name="email" type="email" class="form-control form-control-lg" placeholder="Voer hier u email in...">
              </div>
              <div class="col-12 col-md-3">
                  <button type="submit" class="btn btn-block btn-lg btn-primary">Aanmelden</button>
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
              <a href="index.php#Home">Home</a>
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