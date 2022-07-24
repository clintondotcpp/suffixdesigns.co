<style>
  <?php include "./css/index.css" ?>
</style>
<!--<link rel="stylesheet" href="./css/index.css?v=<?php echo time(); ?>">-->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-J053QB4K19"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-J053QB4K19');
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suffix Designs: Illustrations, Logos, GIFs and Fliers</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
    <script src="./script.js" defer></script>
    <script src="https://kit.fontawesome.com/9c58ab43d1.js" crossorigin="anonymous"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <!-- Meta Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '398201842366874');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=398201842366874&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
</head>
<body>
    <nav>
        <span id="suffixlogo"><a href="./index.php"><img src="./Assets/suffixLogo.PNG"></a></span>
        <ul id="navbar">
        <li><a href="illustrations.php">Illustrations</a></li>
            <li><a href="gifs.php">Cartoon GIFs</a></li>
            <li><a href="photogif.php">Photo GIFs</a></li>
            <li><a href="logogif.php">Logo GIFs</a></li>
            <li><a href="Logos.php">Logos</a></li>
            <li><a href="fliers.php">Fliers</a></li>
            <a href="#" id="close"><span class="fa fa-times"></span></a>
        </ul>
        <div id="mobile">
        <span id= "bar" class="fa fa-bars" style="font-size:36px"></span>
        </div>
    </nav>
        <!--<p>Illustrations, GIFs, Logos and Fliers</p>
        <p><span>We make stunning designs </span> for businesses and professionals</p>-->
    <div class="gradient"></div>
    <section id="intro">
        
    </section>

    <section id= "suffix-info">
        <h3>About Suffix Designs</h3>
        <p>We are a team of digital artists and animators. We create illustrations, animations, logos, fliers, etc for individuals, professionals and businesses.
        </p>
        <a href="./calendly.php"> Schedule a call <span class="fa fa-phone" aria-hidden="true"></span></a>
    </section>
    
    <div class="section-white">
    <section id="categories">
            <a href="illustrations.php">
             <div id="illustrations" class="container">
                <img src="img/Template 004.jpg" alt="Template 1">
                <div class="text">
                <h2>Illustrations</h2>
                <p>$150</p>
              </div>
             </div>
            </a>
        <a href="gifs.php">
        <div id="gifs" class="container">
            <video autoplay loop muted>
                <source src="./Assets/GIFs/Template 001.mp4" type="video/mp4">
                <source src="./Assets/GIFs/Template 001.ogg" type="video/ogg">
            </video>
            <div class="text">
             <h2>Cartoon GIFs</h2>
              <p>$300</p>
            </div>
        </div>
        </a>
        
        <a href="logos.php">
        <div class="container" id="logos">
                <img src="./Assets/Logos/Template 001.PNG" alt="Logos">
                <div class="text">
                  <h2>Logos</h2>
                  <p>$200</p>
                </div>
        </div>
        </a>


        <a href="fliers.php">
        <div id="fliers" class="container">
                <img src="./Assets/Fliers/Template 001.jpg" alt="Fliers">
                <div class="text">
                <h2>Fliers</h2>
                <p>$100</p>
                </div>
        </div>
        </a>

        <a href="logogif.php">
        <div id="logo-gifs" class="container">
            <video autoplay loop muted>
                <source src="LOGOGIF/Template 001.mp4" type="video/mp4">
                <source src="LOGOGIF/Template 001.ogg" type="video/ogg">
            </video>
            <div class="text">
              <h2>Logo GIF</h2>
              <p>$50</p>
            </div>
        </div>
        </a>

        <a href="photogif.php">
            <div id="photo-gifs" class="container">
                <video autoplay loop muted>
                    <source src="PHOTOGIF/Template 001.mp4" type="video/mp4">
                    <source src="PHOTOGIF/Template 001.ogg" type="video/mp4">
                </video>
            <div class="text">
                <h2>Photo GIF</h2>
                <p>$50</p>
            </div>
          </div>
        </a>
        
    </section>
    </div>

    
    
    
    
    <div class="gradient"></div>
    <div class="section-white">
    <section id="clients">
        <div>
        <h4>Our clients</h4>
        </div>
        <div class="client">
        <img src="./Assets/Reviews/client1.JPG">
        <img src="./Assets/Reviews/client2.JPG">
        <img src="./Assets/Reviews/client3.JPG">
        <img src="./Assets/Reviews/client4.JPG">
        <img src="./Assets/Reviews/client5.JPG">
        <img src="./Assets/Reviews/client6.jpg">
        </div>
    </section>
   </div>
    <div class="gradient"></div>

<form action="/newsletter.php" method="POST">
    <section id="newsletter">
        <div class="newstext">
            <h4>Sign Up for our Newsletter and get a <span>FREE</span> Logo GIF</h4>
            <p>Get E-mail updates on our lastest products and <span>special offers.</span></p>
        </div>

        <div class="form">
            <input type="text" placeholder="Your email address" name="email">
            <button>Sign Up</button>
        </div>
    </section>
</form>
    <div class="gradient"></div>
    <div class="section-black">
    <footer>
        <div class="column">
        <ul>
            <li><a href=""><img src="./Assets/suffixLogo.PNG" alt="suffixlogo"></a></li>
            <li><p><strong>Phone:</strong> +(234) 7068734344</p></li>
            <li><p><strong>Email:</strong> info@suffixdesigns.co</p></li>
            <li><p><strong>Address:</strong> 10 East Gardens, Colliers Wood, London, United Kingdom.</p></li>
        </ul>
        <div class="follow">
        <ul>
            <li><a href="https://www.facebook.com/suffixdesigns"><span class="fa fa-facebook" aria-hidden="true"></span><span class="sr-only">Facabook</span></a></li>
            <li><a href="https://www.instagram.com/suffix_designs"><span class="fa fa-instagram" aria-hidden="true"></span><span class="sr-only">Instagram</span></a></li>
            <li><a href="https://wa.me/2348104933232"><span class="fa fa-whatsapp" aria-hidden="true"></span><span class="sr-only">Whatsapp</span></a></li>
            <li><a href="https://m.me/suffixdesigns"><span class="fab fa-facebook-messenger" aria-hidden="true"></span><span class="sr-only">Messenger</span></a></li>
            <li><a href="mailto:info@suffixdesigns.co"><span class="fa fa-envelope" aria-hidden="true"></span><span class="sr-only">E-mail</span></a></li>
        </ul>
        </div>

        </div>

        <div class="column">
        <div class="about">
            <h4>Info</h4>
            <ul>
                <li><a href="about.html">About Us</a></li>
                <li><a href="privacy.html">Privacy Policy</a></li>
                <li><a href="privacy.html">Terms & Conditions</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="copyright.html">Copyright</a></li>
            </ul>
        </div>

        </div>
        <div class="column">
            <div class="faq">
             <h4>Faqs</h4>
            <ul>
            <li><a href="faqs.html#turnaround">Turnaround Time</a></li>
            <li><a href="faqs.html#how-we-work">How we work</a></li>
            <li><a href="refundpolicy.html">Refund Policy</a></li>
            </ul>
            </div>
        </div>
        <div class="copyright">
            <p>© 2021-2022, Suffix Designs</p>
        </div>
        <!--<div id="schedule-a-call">
            <a href="calendly.php">
                <p><small>Speak with us.</small></p>
                <span class="fa fa-phone" aria-hidden="true"></span>
            </a>
       </div>-->
    </footer>
    </div>
</body>

</html>


