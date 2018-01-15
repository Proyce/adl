<?php include_once('contact-form.php'); ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact | AdLineup</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/custom.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php"><img src="img/adlineup.png" id="logo"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="portfolio.php">Portfolio</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="divider bg-dark"></div>

    <div class="bg-dusty-green">
      <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <div class="contactFormFormWrapper">
            <form id="contactForm" action="" method="post">
              
                <?php echo $statusMsg; ?>

                <h3>Get in Touch With Us</h3>
                <p>Fill in your details and "Send"</p>
                <fieldset>
                    <input name="name" placeholder="Your name" type="text" tabindex="1" required autofocus>
                </fieldset>
                <fieldset>
                    <input name="email" placeholder="Your Email Address" type="email" tabindex="2" required>
                </fieldset>

                <fieldset>
                    <input name="title" placeholder="Message title" type="text" tabindex="3" autofocus>
                </fieldset>

                <input type="text" name="gotcha" class="gotcha" value="" style="display: none;">
                
                <fieldset>
                    <textarea name="message" placeholder="Type your message here...." tabindex="4" required></textarea>
                </fieldset>
                <fieldset>
                    <button name="sendMail" type="submit" id="contact-submit" data-submit="...Sending">Send</button>
                </fieldset>
                
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
    

    <footer class="bg-dark text-orange" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Let's Get In Touch!</h2>
            <hr class="my-4 center">
            <p class="mb-5">Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p>+125-456-6789</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
              <a href="mailto:your-email@your-domain.com">contact@adlineup.com</a>
            </p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/custom.min.js"></script>

  </body>

</html>
