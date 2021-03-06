<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Confi-Couture">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Staff</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Staff.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.0.9, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "index.html",
		"logo": "images/Screenshot28.png"
}</script>
    <meta property="og:title" content="Staff">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
  </head>
  <body class="u-body"><header class="u-clearfix u-gradient u-header u-valign-middle u-header" id="sec-d7e0"><div class="u-container-style u-custom-color-4 u-expanded-width u-group u-group-1">
        <div class="u-container-layout u-container-layout-1">
          <h1 class="u-text u-text-1">CONFI-COUTURE</h1>
          <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="541" data-image-height="238">
            <img src="images/Screenshot28.png" class="u-logo-image u-logo-image-1" data-image-width="213.1396">
          </a>
        </div>
      </div></header>
    <section class="u-align-center u-clearfix u-image u-section-1" id="carousel_924e" data-image-width="1256" data-image-height="1000">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center-sm u-align-center-xs u-border-10 u-border-custom-color-4 u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-group-1">
          <div class="u-container-layout u-valign-top u-container-layout-1">
            <h3 class="u-align-center-lg u-align-center-md u-align-center-xl u-text u-text-default u-text-1">STAFF</h3>
            <p class="u-align-center-lg u-align-center-md u-align-center-xl u-text u-text-default u-text-palette-1-base u-text-2">Kindly sign up or login into your profile</p>
            <div class="u-form u-form-1">
              <form action="stafflogin.php" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-20 u-form-vertical u-inner-form" style="padding: 10px" source="custom" name="form" redirect="true">
                <div class="u-form-email u-form-group">
                  <label for="name-a97b" class="u-label u-label-1">Email</label>
                  <input type="email" placeholder="Enter your work email" id="name-a97b" name="email" class="u-border-2 u-border-grey-30 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white" required="required">
                </div>
                <div class="u-form-group">
                  <label for="email-a97b" class="u-label u-label-2">Password</label>
                  <input type="password" placeholder="Enter your password" id="email-a97b" name="password" class="u-border-2 u-border-grey-30 u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white" required="required">
                </div>
                <div class="u-align-center u-form-group u-form-submit">
                  <a href="#" class="u-active-white u-btn u-btn-submit u-button-style u-hover-black u-btn-1">Login<br>
                  </a>
                  <input type="submit" value="submit" name = "submit" class="u-form-control-hidden">
                </div>
                <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                <?php 
                  if(isset($_GET["error"])){
                    if($_GET["error"] == "emailerror"){
                      echo "Email or password incorrect!";
                    }
                  }?>
                <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
                <input type="hidden" value="" name="recaptchaResponse">
              </form>
            </div>
            <p class="u-align-center u-small-text u-text u-text-default u-text-font u-text-palette-1-base u-text-variant u-text-3">
              <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2" href="signup.html" data-page-id="156718691" data-animation-name="flash" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="">Click here to signup<br>
              </a>
            </p>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-0c68"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">All rights reserved.&nbsp;</p>
      </div></footer>
  </body>
</html>