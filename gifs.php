<?php
    //connect to database
    $conn = mysqli_connect('localhost', 'Kurinton', '@@90210@@', 'gifs');
    
    //check connection
    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }

    //write querry from all products
    $sql = 'SELECT `product_id`, `product_video`, `product_name`, `product_price` FROM products';

    //make query and get result
    $result = mysqli_query($conn,$sql);

    //fetch the resulting rows as an array
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
    

    //print_r($products);

    //free result from memory
    mysqli_free_result($result);

    //close the connection
    mysqli_close($conn);




?>

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
    <title>Cartoon GIFs</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
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
        <span id="suffixlogo"><a href="./index.html"><img src="./Assets/suffixLogo.PNG"></a></span>
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
        <span id="bar" class="fa fa-bars" style="font-size:36px"></span>
        </div>
    </nav>
    <div class="gradient"></div>
    <section id="products">
    <h2 class="category-title">Cartoon GIFs</h2>

    <?php foreach($products as $product){ ?>
        <a href="gifdetail.php?product=<?php echo $product['product_id'];?>">
            <div id="<?php $product['product_id']?>" class="container">
                <video  autoplay loop muted>
                    <source src="<?php echo $product['product_video'];?>" type="video/mp4">
                </video>
                <div class="text">
                  <p class="name"><?php echo htmlspecialchars($product['product_name']);?></p>
                  <p class="price">USD <?php echo htmlspecialchars($product['product_price']);?></p>
                </div>
            </div>
        </a>
        
    <?php }?>
    
    </section>

    
    <div class="gradient"></div>
    <form action="/newsletter.php" method="post">
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
                <li><a href="index.php"><img src="./Assets/suffixLogo.PNG" alt="suffixlogo"></a></li>
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
                </ul>
                </div>
            </div>
            <div class="copyright">
            <p>© 2021-2022, Suffix Designs</p>
            </div>
            <div id="schedule-a-call">
        <a href="calendly.php">
            <p><small>Speak with us.</small></p>
            <span class="fa fa-phone" aria-hidden="true"></span>
        </a>
       </div>
        </footer>
        </div>
    
</body>
</html>