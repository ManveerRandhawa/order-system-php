<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShipStation</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Navbar Section -->
    <nav class="navbar">
        <div class="navbar__container">
          <a href="homepage.php" id="navbar__logo">ShipStation</a>
          <div class="navbar__toggle" id="mobile-menu">
            <span class="bar"></span> <span class="bar"></span>
            <span class="bar"></span><span class="bar"></span>
          </div>
          <ul class="navbar__menu">
            <li class="navbar__item">
              <a href="howitworks.php" class="navbar__links" id="How-It-Works">How It Works</a>
            </li>
            <li class="navbar__item">
              <a href="pricing.php" class="navbar__links" id="Pricing">Pricing</a>
            </li>
            <li class="navbar__item">
              <a href="#about" class="navbar__links" id="About-Us"
                >About Us</a>
            </li>
            <li class="navbar__btn">
              <a href="login.php" class="button" id="Login"
                >Login</a>
            </li>
            <li class="navbar__btn">
              <a href="register.php" class="button" id="signup">Sign Up</a>
            </li>
          </ul>
        </div>
      </nav>
      <!--Free Trial Banner-->
      <div class="freetrial" id="freetrial">
        <div class="freetrial__container">
          <a href="register.php" class="freetrial__description" id="Sign Up">Try ShipStation For Free!</a>
        </div>
      </div>  
      <!--About ShipStation-->
      <div class="about" id="home">
        <div class="about__container">
          <h1 class="about__heading">About ShipStation</h1>
          <p class="about__description">ShipStation automates the eCommerce shipping and fulfillment process for small to medium-sized businesses.</p>
          <img class="about__image" src="images/newAsset 4.svg" alt="About ShipStation">
        </div>
      </div>
      <!--Empty Space-->
      <div class="empty">
      </div>
      <!--ShipStation Info-->
      <div class="info" id="home">
        <div class="info__container" style="margin-bottom: -100px;">
          <li style="margin-top: -10px;">
            <img class="info__image" src="images/Freightcom-Interface.png" alt="Our History" style="margin-top: 200px;">
            <h1 class="info__heading" style="margin-top: 200px;">ShipStation: The Perfect eCommerce Platform</h1>
            <pre class="info__description" >
            In ShipStation's 10+ years of experience in the LTL and courier shipping
            industry. We identified a gap in the eCommerce market and in response
            created a solution to further help small and growing businesses.</pre>
          </li>
        </div>
      </div>
      <!--Our Values-->
      <div class="value" id="home">
        <div class="value__container">
          <h2 class="value">Our Values<br></h2>
          <ul class="value">
            <li><img class="listen__image" src="images/headset.png" width="50"></li>
            <li><img class="inovate__image" src="images/bright-lightbulb.png" width="50"></li>
            <li><img class="value__image" src="images/hand.png" width="50"></li>
          </ul>
          <ul class="value__heading">
            <li>Always Listening</li>
            <li>Always Innovating</li>
            <li>Always the Best Value</li>
          </ul>
          <ul class="value__description">
            <li><pre>
              ShipStation was built with user input, feedback
              and customer suggestions in mind. You asked, we
              listened and we will keep making improvements.</pre></li>
            <li><pre>
              We are actively adding new marketplaces,
              providing competitive rates and developing
              new features to help your business prosper</pre></li>
            <li><pre>
              ShipStation provides you with the best value
              with discounted shipping rates and the option
              to add your own carrier accounts and pricing.</pre></li>
          </ul>
        </div>
      </div>
      <!--Get Started-->
      <div class="getstarted" id="home">
        <div class="getstarted__container">
          <h1 class="getstarted__heading">Get Started with ShipStation</h1>
          <pre class="getstarted__description">
            Are you ready for a fully automated shipping management system and instant integration
            with your online marketplace? Book a demo to test out these features.</pre>
            <li class="getstarted__btn">
              <a href="register.php" class="startbutton" id="signup">Sign Up</a>
            </li>
        </div>
      </div>
      <!--Footer-->
      <footer class="footer">
        <div class="footer_container">
          <div class="row">
            <div class="footer-col">
              <h4>Our Company</h4>
              <ul>
                <li><a href="howitworks.php">About Us</a></li>
                <li><a href="#">Our Services</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>Resources</h4>
              <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Shipping</a></li>
                <li><a href="#">Payment Options</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>Quick Links</h4>
              <ul>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Book a Demo</a></li>
                <li><a href="howitworks.php">How It Works</a></li>
                <li><a href="pricing.php">Pricing</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>follow us</h4>
              <div class="social-links">
                <a href="https://www.facebook.com/"><img src="images/Facebook.svg" alt="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/"><img src="images/Twitter.svg" alt="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/"><img src="images/instagram.svg" alt="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/"><img src="images/linkedin.svg" alt="Linkedin"><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
        </div>
     </footer>
</body>
</html>