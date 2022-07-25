<style>
    .form-control small{
        visibility: hidden;
        position: absolute;
        bottom: 0;
        left: 0;
    }

    .form-control.error input{
        border-color: #e74c3c;
    }
</style>
<?php
    require_once('lib/pdo_db.php');

    
    $id = $_GET['product'];
    if(filter_var($id, FILTER_VALIDATE_INT) === false){
        die("No valid ID");
    }
/*`product_id`, `product_name`, `product_img`, `product_price`, `product_description`, */
    try{
        $conn = new mysqli('localhost', 'Kurinton', '@@90210@@', 'fliers');
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
            
   
           
        /*<?php echo $product['product_name'];?> */
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
    <title>Fliers: Template <?php echo $id?></title>
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
    
    <section id="single-product">
        <form  id="myform" name="myform" action="orderupload.php?product=<?php echo $product['stripe_id'];?>" method="POST"  enctype="multipart/form-data">
         <div class="product-image" id="<?php $product_id;?>">
            <h4><?php echo $product['product_name']; ?></h4>
            <h2>USD <?php echo $product['product_price']; ?></h2>
            <img src="<?php echo $product['product_img'];?>" alt="product-image">
            <p><?php echo $product['product_description'];?></p>
         </div>
         <div class="product-main">
         <div id="error"></div>
         <div class="client-email">
            <div id="enter-email" class="email-box">
                <label for="1st-email"><span class="fa fa-envelope" aria-hidden="true" name="1st-email"></span></label>
                <input type="email"  placeholder="Your Email" name="email" required>
                
           </div>
           <div id="confirm-email" class="email-box">
            <span class="fa fa-envelope" aria-hidden="true"></span>
                <input type="email" class="confirm-email" placeholder="Confirm Email" name="confirm_email" required>
                
           </div> 
           
         </div>
         <div class="customer-assets">
             <p>Upload your headshots</p>
            <div class="headshot form-control error">
                <input type="file" value="Upload your headshot/picture" name="myheadshot" id="myheadshot" required>
                <small>Error Message</small>
            </div>
            <p>Upload your logos</p>
            <div class="logo form-control error">
                <input type="file" placeholder="Upload your logo" name="mylogo" id="mylogo" required>
                <small>Error Message</small>
            </div>
            
        </div>
            <!--<label for="story">Tell us your story:</label><p>Tell us how you want your design customized e.g I want a lovely house in the background.</p>
            <textarea name="instructions" id="client-instructions" cols="60" rows="10"></textarea>-->
            <label for="orderinfo">Tell us how you want your design customized:</label>
            <textarea id="orderinfo" name="instructions"rows="5" cols="33"></textarea>
            <div class="message">
         </div>
        </div>
    
            
    
        <button type="submit" name="submit" id="checkout-button" onclick="return fileValidation()">Checkout</button>
        <script>
             var email = document.getElementByName('email');
            var confirmEmail = document.getElementByName('confirm_email');

            function checkInput(){
                const emailValue = email.value.trim();
                const confirmEmailValue = document.value.trim();

                if(emailValue === ""){
                    showMessage(email, 'Email cannot be empty');
                }else{
                    showSuccessFor(email);
                }
                if(confirmEmailValue === ""){
                    showMessage(confirmEmail, 'please confirm your email');
                }else{
                    showSuccessFor(confirmEmail);
                }
            }
            function fileValidation() {
           
            var fileInput =
                document.getElementById('myheadshot');
            var fileInput2 = document.getElementById('mylogo');
             
            var filePath = fileInput.value;
            var filePath2 = fileInput2.value;
            
            // Allowing file type
            var allowedExtensions =
            /(\.gif|\.jpeg|\.png|\.jpg)$/i;
            
            if(file)
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type');
                //showMessage(fileInput, "Invalid file type")
                fileInput.value = '';
                return false;
            }else if(fileInput.files[0].size/(1024*1024)>=10){
                alert('File size must be smaller than 10 mb');
                //showMessage(fileInput, "File size must be smaller than 10mb")
                fileInput.value = '';
                return false;
            }

            if (!allowedExtensions.exec(filePath2)) {
                alert('Invalid file type');
                //showMessage(fileInput2, "invalid file type");
                fileInput2.value = '';
                return false;
            }else if(fileInput2.files[0].size/(1024*1024)>=10){
                alert('File size must be smaller than 10 mb');
                /*showMessage(fileInput2, "File size must be smaller than 10mb");*/
                fileInput2.value = '';
                return false;
            }
        }
        function showMessage(input, message){
            const formControl = input.parentElement;
            const small = formControl.querySelector('small');
            small.innerText = message;

            formControl.className = 'form-control error'
        }
        function setSuccessFor(input){
            const formControl = input.parentElement;
            formControl.className = 'form-control success';
        }
        
    </script>
           </form>
        
         
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

