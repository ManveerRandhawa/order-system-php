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
      <div class="about" id="homepage">
        <div class="about__container" id="homepage">
          <h1 class="about__heading" id="homepage">Our Goal</h1>
          <pre class="about__description" id="homepage">
            ShipStation is an innovative easy-to-use all-in-one solution for
            eCommerce stores to manage the shipping process and provides
            exclusive discounted carrier rates.</pre>
          <img class="homepage_image" src="images/20945972.png" alt="About ShipStation" width="450px">
          <h3 class="marketplace__integration" id="homepage">Marketplace Integration</h1>
            <div class="carrier__logo__wrapper">
                <div class="carrier__logo">
                    <img src="images/shopify.svg" alt="Shopify" id="homepage__image" width="200px">
                </div>
                <div class="carrier__logo">
                    <img src="images/woocomerce.svg" alt="WooCommerce" id="homepage__image" width="200px">
                </div>
                <div class="carrier__logo">
                    <img src="images/amazon.svg" alt="Amazon" id="homepage__image" width="200px">
                </div>
                <div class="carrier__logo">
                    <img src="images/ebay.svg" alt="eBay" id="homepage__image" width="200px">
                </div>
                <div class="carrier__logo">
                    <img src="images/etsy.svg" alt="Etsy" id="homepage__image" width="200px">
                </div>
                <div class="carrier__logo">
                    <img src="images/magento.svg" alt="Magento" id="homepage__image" width="200px">
                </div>
            </div>
            <div class="carrier__logo__wrapper">
                <div class="carrier__logo">
                    <img src="images/walmart.svg" alt="Walmart" id="homepage__image" width="200px">
                </div>
                <div class="carrier__logo">
                    <img src="images/lightspeed.png" alt="Lightspeed" id="homepage__image" width="200px">
                </div>
                <div class="carrier__logo">
                    <img src="images/wix.png" alt="Wix" id="homepage__image" width="200px">
                </div>
                <div class="carrier__logo">
                    <img src="images/squarespace.png" alt="SquareSpace" id="homepage__image" width="200px">
                </div>
                <div class="carrier__logo">
                    <img src="images/bigcommerce.png" alt="BigCommerce" id="homepage__image" width="200px">
                </div>
            </div>  
        </div>
      </div>
      <!--Shipping Carrier Info-->
      <div class="empty">
        <div class="shipping__carrier">
            <h2 class="shipping__carrierh2">Exclusive Shipping Rates with the Best Carriers</h2>
        </div>
        <div class="shippingcarrier__logowrapper">
            <div class="shippingcarrier__logo">
                <img src="images/Canpar Logo.svg" alt="Canpar" id="homepage__image" width="150px">
            </div>
            <div class="shippingcarrier__logo">
                <img src="images/ups.svg" alt="UPS" id="homepage__image" width="150px">
            </div>
            <div class="shippingcarrier__logo">
                <img src="images/dhl.svg" alt="DHL" id="homepage__image" width="150px">
            </div>
            <div class="shippingcarrier__logo">
                <img src="images/purolator.svg" alt="Purolator" id="homepage__image" width="150px">
            </div>
            <div class="shippingcarrier__logo">
                <img src="images/fede.svg" alt="FedEx" id="homepage__image" width="150px">
            </div>
            <div class="shippingcarrier__logo">
                <img src="images/gls.svg" alt="GLS" id="homepage__image" width="150px">
            </div>
        </div>
      </div>


    <div class="benefits__background">
        <div class="col__col-freeplan" style="position:relative; margin-left: auto; margin-right: auto;" id="benefits">
            <div class="col-price-name">
                <div class="benefits__title" id="homepage">What Are the Benefits of ShipStation?</div>
            </div>
            <div class="benefits__image__wrapper">
                <div class="benefits__logo">
                    <img src="images/exclusive shipping rates.png" alt="" width="300px">
                    <h3 style="color: #ef9273;">Exclusive Shipping Rates</h3>
                    <pre style="text-align: left; margin-left: -105px; padding-top: 10px">
                        Get exclusive access to discounted shipping
                        rates across a selection of top tier carriers.</pre>
                </div>
                <div class="benefits__logo">
                    <img src="images/marketplace integration.webp" alt="" width="300px">
                    <h3 style="color: #ef9273;">Marketplace Integrations</h3>
                    <pre style="text-align: left; margin-left: -105px; padding-top: 10px">
                        Our eCommerce solution easily integrates
                        with Shopify, Magento 2, WooCommerce,
                        and many more!</pre>
                </div>
                <div class="benefits__logo">
                    <img src="images/add your own carrier rates.png" alt="" width="300px">
                    <h3 style="color: #ef9273;">Add Your Own Carrier Rates</h3>
                    <pre style="text-align: left; margin-left: -105px; padding-top: 10px">
                        You can load your own carrier accounts and
                        use ClickShip's shipping management system.</pre>
                </div>
            </div>
            <div class="benefits__image__wrapper">
                <div class="benefits__logo">
                    <img src="images/real time rates.jpg" alt="" width="300px" style="padding-top: 100px;">
                    <h3 style="color: #ef9273;">Real-Time Rates</h3>
                    <pre style="text-align: left; margin-left: -105px; padding-top: 10px">
                        ClickShip carrier shipping rates are live,
                        real-time rates – ensuring you get up to
                        the minute pricing 24/7.</pre>
                </div>
                <div class="benefits__logo">
                    <img src="images/package optimization.jpg" alt="" width="300px"  style="padding-top: 100px;">
                    <h3 style="color: #ef9273;">Package Optimization</h3>
                    <pre style="text-align: left; margin-left: -105px; padding-top: 10px">
                        The Smart Packaging solution saves you time and
                        packaging costs by automatically recommending
                        the perfect packaging solution.</pre>
                </div>
            </div>
        </div>
    </div>
    <!--Shipping Management System-->
    <div>
        <div class="shipping__management__div">
            <img src="images/Shipping_Management_System.png" alt="" width="700px" class="shipping__image">
            <div class="shipping__management">
                <h1 style="color: #ef9273;">Shipping Management System</h1>
                <pre style="padding-top: 10px; padding-bottom: 10px; color: #445863;">
                    ShipStation provides all the tools you need to streamline your entire shipping
                    process and optimize order fulfillment to save you valuable time and money.</pre>
                    <a href="register.php" class="button" id="homepageshipping" style="margin-top: 10px;">Start Now</a>
            </div>
        </div>
    </div>
      <!--Our Pricing-->
      <div>
        <div class="pricing__management__div">
            <img src="images/Pricing Options.png" alt="" width="725px" class="pricing__options__image">
            <div class="pricing__management">
                <h1 style="color: #ef9273; padding-left: 200px;">Better Shipping. Better Pricing.</h1>
                <pre style="padding-top: 10px; padding-bottom: 10px; padding-left: 112px;">
                    No matter what type of online business you are operating, there is a plan
                    that is suited for your business' needs. Every ShipStation plan includes a
                    14-day free trial.</pre>
                    <a href="pricing.php" class="button" id="homepagepricing" style="margin-top: 10px;">Start Now</a>
            </div>
        </div>
    </div>
      <!--Get Started-->
      <div class="getstarted" id="homepage">
        <div class="getstarted__container" id="homepage" style="height: 320px">
          <h1 class="getstarted__heading" style="padding-top: 60px; font-size: 40px;">Ready to Try ShipStation?</h1>
          <pre class="getstarted__description" style="font-size: 24px;">
            Are you ready for a fully automated shipping management system and instant integration
            with your online marketplace? Book a demo to test out these features.</pre>
            <li class="getstarted__btn">
              <a href="register.php" class="startbutton" id="signup" style="width: 190px;
              height: 50px; margin-top: 30px;">Start For Free</a>
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
                <li><a href="#">About Us</a></li>
                <li><a href="howitworks.php">Our Services</a></li>
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