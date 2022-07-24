<!DOCTYPE html>
<html>
<head>
<style>
.error{color: #FF0000; font-size: 10px;}    
</style>
</head>
<body>

<?php
    require_once('lib/pdo_db.php');

    
    $id = $_GET['product'];
    if(filter_var($id, FILTER_VALIDATE_INT) === false){
        die("No valid ID");
    }
/*`product_id`, `product_name`, `product_img`, `product_price`, `product_description`, */
    try{
        $conn = new mysqli('localhost', 'Kurinton', '@@90210@@', 'illustrations');
        if($conn->connect_error){
            $error = $conn->connect_error;
        }
     $sql = 'SELECT  `product_id`, `product_name`, `product_img`, `product_price`, `product_description`, `stripe_id` FROM products WHERE `product_id` = '.$id.' LIMIT 1'; //TODO
        $result = $conn->query($sql);
        
    } catch(Exception $e){
        $error = $e->getMessage();
    }

    $rows = $result->num_rows;
    if(!$rows){
        echo "No Results Found";
    }else{
        while($product = $result->fetch_assoc()){
            
   
           
        
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
    <title>Illustrations: Template <?php echo $id?></title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <script src="https://kit.fontawesome.com/9c58ab43d1.js" crossorigin="anonymous"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="./script.js" defer></script>
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
    <div class="gradient"></div>
    <form method="post" action="orderupload.php?product=<?php echo $product['product_name'];?>" enctype="multipart/form-data">
    <section id="single-product">
        <?php
            $email = $confirm_email = $headshot = $logo = "";
            $emailErr = $confirm_emailErr = $headshotErr = $logoErr ="";

            
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $instructions = test_input($_POST["instructions"]);
            

                function test_input($data){
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }

                if(empty($_POST['email'])){
                $emailErr = "Enter a valid Address";
                }
                else{
                    $email = test_input($_POST["email"]);
                    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        $emailErr = "The email address is incorrect";
                    }
                }

                if(empty($_POST['confirm_email'])){
                    $confirm_emailErr = "Enter a valid Address";
                 }
                else{
                    $email = test_input($_POST["confirm_email"]);
                    if(!filter_var($confirm_email, FILTER_VALIDATE_EMAIL)){
                        $confirm_emailErr = "The email address is incorrect";
                    }
                }

                if(empty($_POST['headshot'])){
                    $headshotErr = "Please upload a headshot";
                }
                else{
                    $headshot = test_input($_POST['headshot']);
                }

                if(empty($_POST['logo'])){
                    $logoErr = "Please upload a logo";
                }
                else{
                    $logoErr = test_input($_POST['logo']);
                }

             }
        
?>

         <div class="product-image" id="<?php $product_id;?>">
            <h4><?php echo $product['product_name']; ?></h4>
            <h2>USD <?php echo $product['product_price']; ?></h2>
         
            <img src="<?php echo $product['product_img'];?>" alt="product-image">
            <p><?php echo $product['product_description'];?></p>
         </div>
         <div class="product-main">
            
         <div class="client-email">
            <div id="enter-email" class="email-box">
                <label for="1st-email"><span class="fa fa-envelope" aria-hidden="true" name="1st-email"></span></label>
                <input type="email"  placeholder="Your Email" name="email">
                <span class="error"><?php echo $emailErr?></span>
           </div>
           <div id="confirm-email" class="email-box">
            <span class="fa fa-envelope" aria-hidden="true"></span>
                <input type="email" class="confirm-email" placeholder="Confirm Email" name="confirm_email">
                <span class="error"><?php echo $confirm_emailErr?></span>
           </div> 
           
         </div>
         <div class="customer-assets">
             <p>Upload your headshots</p>
            <div class="headshot">
                <input type="file" value="Upload your headshot/picture" name="headshot">
                <span class="error">*<?php echo $headshotErr?></span>
            </div>
            <p>Upload your logos</p>
            <div class="logo">
                <input type="file" placeholder="Upload your logo" name="logo" >
                <span class="error"><?php echo $logoErr?></span>
            </div>
            
        </div>

         <div class="message">
            <p>Tell us how you want your design customized e.g I want a lovely house in the background.</p>
            <textarea name="instructions" id="instructions" cols="60" rows="10"></textarea>
         </div>
            </form>
            <form action="./create-checkout-session.php?product=<?php echo $product['stripe_id'];?>" method="POST">
           <button type="submit" id="checkout-button">Checkout</button>
           </form>
        </div>
        
         
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

<?php

    }//if
}//while
    $conn->close();
?>

