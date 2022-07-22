<?php
    //connect to database
    $conn = mysqli_connect('localhost', 'Kurinton', '@@90210@@', 'illustrations');
    
    //check connection
    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }

    
    /*
        GET THE CURRENT PAGE NUMBER
        This code will get the current page number with the help of
        $_GET Array. Note that if it is not present, it will set the default page 
        number to 1
    */
    if(isset($_GET['pageno'])){
        $pageno = $_GET['pageno'];
    } else{
        $pageno = 1;
    }

    /*
    THE FORMULA FOR PHP PAGINATION
    You can always manage the number of records to be displayed
    in a page by changing the value of $no_of_products_per_page
     */
    $no_of_products_per_page = 10;
    $offset = ($pageno-1) * $no_of_products_per_page;
    
    /*
        get the number of total number of pages

    */
    $total_pages_sql = "SELECT COUNT(*) FROM products";
    $result = mysqli_query($conn,$total_pages_sql);
    $total_rows = mysqli_fetch_array($result)[0];
    $total_pages = ceil($total_rows/$no_of_products_per_page);

    /*Constructing the SQL Query for pagination*/
    $sql = "SELECT * FROM products LIMIT $offset, $no_of_products_per_page";

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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Illustrations</title>
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
        <span id="bar" class="fa fa-bars" style="font-size:36px"></span>
        </div>
    </nav>
    <div class="gradient"></div>
    <section id="products">
    <h2 class="category-title">Caricatures</h2>
    <?php
        $num = 21;
    ?>
    <?php foreach($products as $product){ ?>
        <a href="single-product-page.php?product=<?php echo $product['product_id'];?>" id="link-color">
        <div id="product-1" class="container">
            <img src="<?php echo $product['product_img'];?>">
                <div class="text">
                    <p class="name"><?php echo htmlspecialchars($product['product_name']);?></p>
                    <p class="price">$<?php echo htmlspecialchars($product['product_price']);?></p>
                </div>
        </div>
        </a>
    <?php }?>
    
        
            
    </section>
    <!--PAGINATION BUTTONS. These Buttons are served to users as NEXT PAGE & PREVIOUS PAGE, so that they can easily navigate through the pages. Here I am using bootstrap's pagination button-->
    <section id="pagination" class="section-p1">
        <ul class="pagination">
            <li><a href="?pageno=1">1</a></li>
            <li class="<?php if($pageno <= 1){echo 'disabled';}?>">
                <a href="<?php if($pageno <= 1){echo '#';} else{echo "?pageno=".($pageno-1); }?>">Previous</a>
            </li>
            <li class="<?php if($pageno >= $total_pages){echo 'disabled';}?>">
                <a href="<?php if($pageno >= 1){echo '#';} else{echo "?pageno=".($pageno + 1); }?>">Next</a>
            </li>
            <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
        </ul>
    </section>

    <section id= "suffix-info">
        <h3>For custom orders or requests</h3>
        <p>Kindly email or schedule a call</p>
        <a href="./calendly.php"> Schedule a call <span class="fa fa-phone" aria-hidden="true"></span></a>
        <a href="mailto:info@suffixdesigns.co">Email Us</a>
    </section>
    <div class="gradient"></div>
    <form action="/signup" method="post">
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
                <li><a href="index.html"><img src="./Assets/suffixLogo.PNG" alt="suffixlogo"></a></li>
                <li><p><strong>Phone:</strong> +(234) 7068734344</p></li>
                <li><p><strong>Email:</strong> info@suffixdesigns.co</p></li>
                <li><p><strong>Address:</strong> 10 East Gardens, Colliers Wood, London.</p></li>
            </ul>
    
            <div class="follow">
            <p>Follow us</p>
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