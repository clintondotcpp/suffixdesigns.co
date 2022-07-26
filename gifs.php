<?php
    //connect to database
    $conn = mysqli_connect('localhost', 'Kurinton', '@@90210@@', 'gifs');
    
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
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
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
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php"><img src="./Assets/suffixlogo.PNG" alt="" width="100" height="100"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Custom Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Illustrations</a></li>
                            <li><a class="dropdown-item" href="#">Cartoon GIFs</a></li>
                            <li><a class="dropdown-item" href="#">Logos</a></li>
                            <li><a class="dropdown-item" href="#">Fliers</a></li>
                            <li><a class="dropdown-item" href="#">Logo GIFs</a></li>
                            <li><a class="dropdown-item" href="#">Photo GIFs</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Schedule a call</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <!--<form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>-->
            </div>
        </div>
    </nav>
   
    <section class="products">
<div class="container text-center my-5">
<h4 class="display-5 fw-bold mt-5">Illustrations</h4>
<div class="row my-5">
<?php foreach($products as $product){ ?>
<div class="col-lg-4">
<div class="card" style="width: 18rem;">
<video src="<?php echo $product['product_video'];?>" autoplay loop muted></video>
  <div class="card-body">
    <h5 class="card-title"><?php echo htmlspecialchars($product['product_name']);?></h5>
    <a href="photogifdetail.php?product=<?php echo $product['product_id'];?>" id="link-color" class="btn btn-primary">Pay USD <?php echo htmlspecialchars($product['product_price']);?></a>
  </div>
</div>
</div>
<?php }?>
</div>
</div>
</section>
    
<section id="clients">
<div class="container text-center mb-4">
  <div class="row row-cols-6 justify-content-center">
    <div class="col">
        <img src="./Assets/Reviews/client1.JPG" alt="" width="75" height="75" class="g-width-100 g-brd-around g-brd-gray-light-v4 g-bg-white g-px-15 g-py-10 g-ma-5">
    </div>
    <div class="col">
    <img src="./Assets/Reviews/client2.JPG" alt="" width="75" height="75" >
    </div>
    <div class="col">
    <img src="./Assets/Reviews/client3.jpg" alt="" width="75" height="75" >
    </div>
    <div class="col">
    <img src="./Assets/Reviews/client4.jpg" alt="" width="75" height="75" >
    </div>
    <div class="col">
    <img src="./Assets/Reviews/client5.jpg" alt="" width="75" height="75" >
    </div>
    <div class="col">
    <img src="./Assets/Reviews/client6.jpg" alt="" width="75" height="75" >
    </div>
    <div class="col">
    <img src="./Assets/Reviews/client7.jpg" alt="" width="75" height="75" >
    </div>
    <div class="col">
    <img src="./Assets/Reviews/client8.jpg" alt="" width="75" height="75" >
    </div>
    <div class="col">
    <img src="./Assets/Reviews/client9.jpg" alt="" width="75" height="75" >
    </div>
    <div class="col">
    <img src="./Assets/Reviews/client10.png" alt="" width="75" height="75" >
    </div>
    <div class="col">
    <img src="./Assets/Reviews/client11.jpg" alt="" width="75" height="75" >
    </div>
    <div class="col">
    <img src="./Assets/Reviews/client12.png" alt="" width="75" height="75" >
    </div>
  </div>
</div>
</section>

<footer class="py-5 px-3 bg-dark">
    <div class="row">
      <div class="col-6 col-md-2 mb-3">
        <h5 class="text-white">Help</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
        </ul>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <h5 class="text-white">Faq</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
        </ul>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <h5 class="text-white">Info</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
        </ul>
      </div>

      <div class="col-md-5 offset-md-1 mb-3">
        <form>
          <h5 class="text-white">Subscribe to our newsletter</h5>
          <p class="text-white">Monthly digest of what's new and exciting from us.</p>
          <div class="d-flex flex-column flex-sm-row w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
            <button class="btn btn-primary" type="button">Subscribe</button>
          </div>
        </form>
      </div>
    </div>

    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
      <p class="text-white">© 2022 Suffix Designs. All rights reserved.</p>
      <ul class="list-unstyled d-flex">
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
      </ul>
    </div>
  </footer>

</body>

</html>


