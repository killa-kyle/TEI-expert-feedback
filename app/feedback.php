

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  
  <!-- load Typekit  fonts -->
  <script src="//use.typekit.net/otq2uuf.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>
  
  <link rel="stylesheet" href="styles/bootstrap.css">
  <link rel="stylesheet" href="styles/main.css">
  <!-- build:js scripts/vendor/modernizr.js -->
  <script src="bower_components/modernizr/modernizr.js"></script>
  <!-- endbuild -->
</head>
<body>
  <header>
    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
          </ul>
          <ul class="nav navbar-nav navbar-right">
          </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
      <div class="container">
        <div class="row logo-row "><img class="logo "src="images/tei-logo.png"></div>
      </div>
    </header>
    <!-- progress-bar  -->
    <div class=" container main-container mt progress-container hidden-xs">
      <div class="row smpl-step mb hidden-xs" style="border-bottom: 0; min-width: 500px;">
        <div class="col-xs-4 smpl-step-step complete">
          <div class="text-center smpl-step-num">CASE OVERVIEW</div>
          <div class="progress">
            <div class="progress-bar"></div>
          </div>
          <div class="smpl-step-icon first">1</div>
          <!-- <div class="smpl-step-info text-center">Case Overview</div> -->
        </div>
        <div class="col-xs-4 smpl-step-step complete">
          <div class="text-center smpl-step-num"> CV / INFO</div>
          <div class="progress">
            <div class="progress-bar"></div>
          </div>
          <div class="smpl-step-icon">2</div>
          <!-- <div class="smpl-step-info text-center">Your fee schedule</div> -->
        </div>
        <div class="col-xs-4 smpl-step-step active">
          <div class="text-center smpl-step-num emphasis">FINISH</div>
          <div class="progress">
            <div class="progress-bar"></div>
          </div>
          <div class="smpl-step-icon">3</div>
          <!-- <div class="smpl-step-info text-center">Upload CV</div> -->
        </div>
      </div>
      </div><!--  end progress bar -->
      
      
      <div class="container main-container mt">
      <div class="testing visible-xs mb mt">STEP: <img src="images/3.svg" width="20px"> of <img src="images/3.svg" width="20px"> </div>  
        <!-- INTRO SECTION -->
            <div class="row sec-intro mb mt">

              <div class="col-md-6 col-md-offset-1 ">
                <div class="pbBody">
                
                  <h2 class="g-m-title">Thank You Dr. Stone,</h2>
                    <p>We have received your feedback successfully.<br><br>  

                    We will contact you as soon as our client has reviewed your response. In the meantime, feel free to contact me with any questions. <br><br>

                    <em>Faiza Patten</em>
                      </p>
                </div>

                <?php
                if (isset($_POST['send'])) {
                    $to = 'kylerose@gmail.com'; // Use your own email address
                        $subject = 'Expert feedback test';
                }

                $message = 'Chart Review Fee: ' . $_POST['inputCRfee'] . "\r\n\r\n";
                $message .= 'Deposition Fee: ' . $_POST['inputDepfee'] . "\r\n\r\n";
                $message .= 'Court Fee: ' . $_POST['inputCourtfee'] . "\r\n\r\n";

                echo $message;
                ?>

              </div>
              <div class="col-md-4  card">
                <div class="case-manager-card">
                  <div class="cardimg">
                    <img class="case-manager-img" src="images/Faiza.jpg">
                    <p>Your Case Manager:</p>
                    <h2>Faiza Patten</h2>
                  </div>

                  <ul>
                    <li>Phone: (917) 702-2721</li>
                    <li>Fax: (302) 468-5295</li>
                    <li>Email: <a href="mailto:faiza@theexperinstitute.com">faiza@theexperinstitute.com</a></li>
                    <br>
                    
                    <li>
                      <p>
                        <span>The Expert Institute</span><br>
                        75 Maiden Lane, Suite 704 <br>
                        New York, NY 10038
                      </p>
                    </li>
                  </ul>

                </div>
              </div>




            </div> <!-- end row -->

            <div class="row mb">
              <div class="form-group text-center mt ">
                  <div class="col-md-offset-4 col-md-4 col-xs-12">
                      <a href="index.html"><button class="submit is-valid btn-valid">EXIT</button></a>
              
                  </div>
              </div>
            </div>

                
                </div> <!-- end main container  -->
                </div> <!-- END CONTAINER -->

                <br>
                <footer class="mt"></footer>
                <!--[if lt IE 7]>
                  <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
                <![endif]-->
                <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
                <script>
                  (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
                  function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
                  e=o.createElement(i);r=o.getElementsByTagName(i)[0];
                  e.src='//www.google-analytics.com/analytics.js';
                  r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
                  ga('create','UA-XXXXX-X');ga('send','pageview');
                </script>
                <!-- build:js scripts/main.js -->
                <script src="bower_components/jquery/jquery.js"></script>
                <script src="scripts/jquery.sglide.2.1.0.min.js"></script>
                <script src="scripts/main.js"></script>
                <script src="scripts/hello.js"></script>
                <!-- endbuild -->
                <!-- build:js scripts/vendor/bootstrap.js -->
                <script src="bower_components/bootstrap/js/affix.js"></script>
                <script src="bower_components/bootstrap/js/alert.js"></script>
                <script src="bower_components/bootstrap/js/dropdown.js"></script>
                <script src="bower_components/bootstrap/js/tooltip.js"></script>
                <script src="bower_components/bootstrap/js/modal.js"></script>
                <script src="bower_components/bootstrap/js/transition.js"></script>
                <script src="bower_components/bootstrap/js/button.js"></script>
                <script src="bower_components/bootstrap/js/popover.js"></script>
                <script src="bower_components/bootstrap/js/carousel.js"></script>
                <script src="bower_components/bootstrap/js/scrollspy.js"></script>
                <script src="bower_components/bootstrap/js/collapse.js"></script>
                <script src="bower_components/bootstrap/js/tab.js"></script>
                <!-- endbuild -->
              </body>
            </html>