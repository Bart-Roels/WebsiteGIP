<!DOCTYPE html>
<html lang="en">

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
                    <a class="nav-link" href="indexEN.php#Home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="indexEN.php#Informatie">Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="indexEN.php#Team">Our team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="LogboekEN.html">Logbook</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Languages
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="index.php"><img src= "assets/img/belgium.png">NL</a>
                      <a class="dropdown-item" href="indexFR.php"><img src= "assets/img/france.png">FR</a>
                      <a class="dropdown-item" href="indexEN.php"><img src= "assets/img/united-kingdom.png">ENG</a>
                  </div>
                </li>
            </ul>
            <form action="inloggen.php">
              <button class="btn btn-primary signinbtn" type="submit">Login</button>
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
          <h1 class="mb-5">Welcome to our website!</h1>
          <p>
            Hello, we are Bart Roels and Koen Van Der Plas and we are IT & Networking students at Oscar Romero College. For our integrated task or
            GIP we have chosen to create a website for Garage Mertens, located in Dendermonde. As the name for our project we have chosen
            "Automotive Checker". This name immediately refers to the reason for our project: automation of a problem.
            Bart is the son of Caroline Van De Voorde and she is the service manager in Garage Mertens. This also explains our link with the company.
          </p>
          <br>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
        <form method="POST" action="register.php">
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input name="email" type="email" class="form-control form-control-lg" placeholder="Enter your email...">
              </div>
              <div class="col-12 col-md-3">
                  <button type="submit" class="btn btn-block btn-lg btn-primary">Sign Up</button>
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
            <h3>Reason?</h3>
            <p class="lead mb-0">What is the reason behind this project? Why did we start this project?</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-target m-auto text-primary"></i>
            </div>
            <h3>Goal?</h3>
            <p class="lead mb-0">What are our goals behind this project, both personally and externally?</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-check m-auto text-primary"></i>
            </div>
            <h3>Result?</h3>
            <p class="lead mb-0">How do we see the end result?</p>
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
          <h2>Reason?</h2>
          <p class="lead mb-0">
            Garage Mertens asked itself how they can increase efficiency during 
            the inspection of new cars. <br> </br>

            The garage is faced with the problem that the control of new stock cars, at the moment, is not very efficient. 
            When a new vehicle arrives, it must be checked whether it has 
            suffered any damage during transport and/or delivery. <br> </br>

            After the receipt and first check of the vehicle, there are several periodic checks that the employees must perform. The next deadline will come after 6 weeks. 
            After this there are more deadlines that must be respected. 
            The check is carried out again after 3 months, after 6 months and finally after 12 months.<br> </br>

            This procedure is still done on paper. There is one specific form that follows 
            the entire route of each vehicle, 
            from receipt to initial inspection for damage to the sale.<br> </br>

            We are highly motivated to put our training, both theoretic as the many exercises we had, 
            into practice with this project and certainly because our program will be used in actually daily life.
          </p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" style="background-image: url('assets/img/Handen.jpg');"></div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2>Goal?</h2>
          <p class="lead mb-0">
                Our goal, towards the company, is to automate and digitize a manual process. </br>
                By doing this we want to achieve several goals: </br>
                - Increase efficiency</br>
                - More internal controls </br>
                - Automatic reminders </br>
                - Work more ecologically

            <br> </br>
            The goals that we as students have to achieve with this project are mainly to put our theoretical knowledge into practice. 
            Our practical experience is still limited, but during our studies we received many practical courses. 
            That is why we try to put our knowledge into practice with this larger project. 
            One of our goals is also learning to communicate with various end users. 
            End users with technical knowledge but also end users without technical knowledge.
          </p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/Code.jpg');">
        </div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Result</h2>
          <p class="lead mb-0">
            The ultimate aim of our project is to digitize and automate the entire procedure of the inspections. 
            This involves several elements.  <br> </br>

            We do this by providing a database that records all data and 
            in which the largest possible amount of data is retrieved for each car. 
            It will be quick and easy to search through all the information and this can also be done from any part of information, 
            for example by means of the chassis number, via the type of car, via the date of delivery….<br> </br>

            As the end result of our project, we want to have a fully functional website, which can be used easily and smoothly by the employees of the garage. 
            This website will communicate with the database that already 
            contains all the current data and where the new data can be easily added by the user via input screens.<br> </br>

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
            <h5>Caroline Van De Voorde <br>Contact</h5>
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
          <h2 class="mb-4">Ready to get started? Sign up now!</h2>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
        <form method="POST" action="register.php">
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input name="email" type="email" class="form-control form-control-lg" placeholder="Enter your email...">
              </div>
              <div class="col-12 col-md-3">
                  <button type="submit" class="btn btn-block btn-lg btn-primary">Sign Up</button>
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
              <a href="indexEN.php#Home">Home</a>
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