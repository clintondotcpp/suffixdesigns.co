<style>
    <?php include "./css/index.scss" ?>
</style>
<!--<link rel="stylesheet" href="./css/index.css?v=<?php echo time(); ?>">-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.suffixdesigns.co" />
    <meta property="og:image" content="https://www.suffixdesigns.co/Assets/suffixlogo.PNG" />
    <meta property="og:image:alt" content="suffix designs logo" />
    <meta property="og:site_name" content="Suffix Designs" />
    <meta property="og:description" content="Suffix Designs create custom illustrations, art portraits, fliers, logo, animations/GIFs and websites, commercial designs for individuals, professionals and businesses" />
    <meta property="og:title" content="Suffix Designs: Illustrations, Logos, Animated stickers, GIFs, Fliers, Websites and commercial designs" />
    <meta name="facebook-domain-verification" content="2vu2huvi6q03km94x31reo4azscq5j" />


    <title>Suffix Designs: Illustrations, Logos, Animated stickers, GIFs, Fliers, Websites and commercial designs</title>

    <link rel="shortcut icon" type="image/jpg" href="Assets/favicon.jpg">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/9c58ab43d1.js" crossorigin="anonymous"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <!-- Google tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-155045990-1">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-155045990-1');
    </script>
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '398201842366874');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=398201842366874&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="Assets/suffixlogo.PNG" alt="suffixdesignslogo" width="100" height="100"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Custom Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="illustrations.php">Illustrations</a></li>
                            <li><a class="dropdown-item" href="gifs.php">Cartoon GIFs</a></li>
                            <li><a class="dropdown-item" href="logos.php">Logos</a></li>
                            <li><a class="dropdown-item" href="fliers.php">Fliers</a></li>
                            <li><a class="dropdown-item" href="logogif.php">Logo GIFs</a></li>
                            <li><a class="dropdown-item" href="photogif.php">Photo GIFs</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="calendly.php">Schedule a call</a></li>
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

    <section id="intro">
        <div class="px-4 py-5 my-5 text-center">
            <h1 class="display-1 fw-bold mt-5 pt-5">A design agency with a swirl</h1>
            <h4>Scale your business with high quality designs and animations</h4>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Custom Illustrations, GIFs/animations, websites and so much more</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a href="#categories" class="btn btn-dark btn-lg active" role="button" aria-pressed="true">Get Started</a>
                    <a href="mailto:info@suffixdesigns.co" class="btn btn-light btn-lg active" role="button" aria-pressed="true">Email us</a>
                    <!--<a href="contact.html" class="btn btn-outline-secondary btn-lg px-4" role="button" aria-pressed="true">Custom order</a>-->
                </div>
            </div>
        </div>
    </section>



    <ul class="d-flex flex-row justify-content-center px-5">
        <li class="px-2">

        </li>
        <li class="px-5">

        </li>
        <li class="px-10">

        </li>
    </ul>




    <!--<div class="col-md-12 text-left d-flex justify-content-start">-->
    <section class="offer">
        <div class="container">
            <h2 class="text-center">What you get when you order an illustration or cartoon GIF</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col-md-12">
                    <div class="container p-3">
                        <img class="g-width-100 g-brd-around g-brd-gray-light-v4 g-bg-white g-px-15 g-py-10 g-ma-5 border" src="https://suffixdesigns.co/suffix-designs-gifs/stickers1.gif" alt="Image Description" width="150" height="150">
                        <img class="g-width-100 g-brd-around g-brd-gray-light-v4 g-bg-white g-px-15 g-py-10 g-ma-5 border" src="https://suffixdesigns.co/suffix-designs-gifs/stickers2.gif" alt="Image Description" width="150" height="150">
                        <img class="g-width-100 g-brd-around g-brd-gray-light-v4 g-bg-white g-px-15 g-py-10 g-ma-5 border" src="https://suffixdesigns.co/suffix-designs-gifs/stickers3.gif" alt="Image Description" width="150" height="150">
                        <img class="g-width-100 g-brd-around g-brd-gray-light-v4 g-bg-white g-px-15 g-py-10 g-ma-5 border" src="https://suffixdesigns.co/suffix-designs-gifs/stickers4.gif" alt="Image Description" width="150" height="150">
                        <img class="g-width-100 g-brd-around g-brd-gray-light-v4 g-bg-white g-px-15 g-py-10 g-ma-5 border" src="https://suffixdesigns.co/suffix-designs-gifs/stickers5.gif" alt="Image Description" width="150" height="150">
                        <h5>5 FREE custom animated GIFs</h5>
                    </div>

                </div>
            </div>
            <div class="col-md-12">
                <div class="container p-3">

                    <img class="g-width-100 g-brd-around g-brd-gray-light-v4 g-bg-white g-px-15 g-py-10 g-ma-5 border" src="https://suffixdesigns.co/reach/1.webp" alt="Image Description" width="150" height="150">
                    <img class="g-width-100 g-brd-around g-brd-gray-light-v4 g-bg-white g-px-15 g-py-10 g-ma-5 border" src="https://suffixdesigns.co/reach/2.webp" alt="Image Description" width="150" height="150">
                    <img class="g-width-100 g-brd-around g-brd-gray-light-v4 g-bg-white g-px-15 g-py-10 g-ma-5 border" src="https://suffixdesigns.co/reach/3.webp" alt="Image Description" width="150" height="150">
                    <img class="g-width-100 g-brd-around g-brd-gray-light-v4 g-bg-white g-px-15 g-py-10 g-ma-5 border" src="https://suffixdesigns.co/reach/4.webp" alt="Image Description" width="150" height="150">
                    <img class="g-width-100 g-brd-around g-brd-gray-light-v4 g-bg-white g-px-15 g-py-10 g-ma-5 border" src="https://suffixdesigns.co/reach/5.webp" alt="Image Description" width="150" height="150">
                    <h5>5 variations of your illustration/cartoon GIF for "Sold", "For Sale", etc</h5>
                </div>
            </div>
            <div class="col-md-12">
                <div class="container p-3">
                    <img class="g-width-100 g-brd-around g-brd-gray-light-v4 g-bg-white g-px-15 g-py-10 g-ma-5 border" src="https://suffixdesigns.co/reach/6.webp" alt="Image Description" width="150" height="150">
                    <img class="g-width-100 g-brd-around g-brd-gray-light-v4 g-bg-white g-px-15 g-py-10 g-ma-5 border" src="https://suffixdesigns.co/reach/7.webp" alt="Image Description" width="150" height="150">
                    <img class="g-width-100 g-brd-around g-brd-gray-light-v4 g-bg-white g-px-15 g-py-10 g-ma-5 border" src="https://suffixdesigns.co/reach/8.webp" alt="Image Description" width="150" height="150">
                    <img class="g-width-100 g-brd-around g-brd-gray-light-v4 g-bg-white g-px-15 g-py-10 g-ma-5 border" src="https://suffixdesigns.co/reach/9.webp" alt="Image Description" width="150" height="150">
                    <img class="g-width-100 g-brd-around g-brd-gray-light-v4 g-bg-white g-px-15 g-py-10 g-ma-5 border" src="https://suffixdesigns.co/reach/10.webp" alt="Image Description" width="150" height="150">
                    <h5>5 variations of your illustration/cartoon GIF for "Sold", "For Sale", etc with a transparent background for posts and stories.</h5>
                </div>
            </div>
        </div>

        </div>
    </section>

    <section>
        <div class="container text-center my-5 py-2">
            <h1>100% satisfaction</h1>
            <p>We will revise your designs until you're 100% satisfied!</p>
        </div>
    </section>



    <div class="container mt-5 mb-5">
        <style>
            .shadow {
                box-shadow: 0 3px 10px rgb(255 255 255 / 0.2);
            }
        </style>
        <div class="row g-2">

            <div class="col-md-4">
                <div class="card p-3 text-center px-4 shadow">

                    <div class="user-image">

                        <img src="https://suffixdesigns.co/random/marilyn.JPG" class="rounded-circle" width="80">

                    </div>

                    <div class="user-content">

                        <h5 class="mb-0">Marilyn Tarver</h5>
                        <small>Realtor, RE/MAX</small>
                        <p>I Love using this in my work, and have received compliments and given referrals!</p>

                    </div>

                    <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>

                </div>
            </div>

            <div class="col-md-4">

                <div class="card p-3 text-center px-4 shadow">

                    <div class="user-image">

                        <img src="https://suffixdesigns.co/random/amanda.JPG" class="rounded-circle" width="80">

                    </div>

                    <div class="user-content">

                        <h5 class="mb-0">Amanda Sorisho</h5>
                        <small>RealtyOneGroup</small>
                        <p>Love this so much! Thank you again🙌. You guys were so quick to get this done(within 7 days). I will definitely send agents your way!</p>

                    </div>

                    <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card p-3 text-center px-4 shadow">

                    <div class="user-image">

                        <img src="https://suffixdesigns.co/random/perry.jpg" class="rounded-circle" width="80">

                    </div>

                    <div class="user-content">

                        <h5 class="mb-0">Perry Keyasone</h5>
                        <small>Realtor, Sequoia Real Estate Bay Area.</small>
                        <p>Amazing work my friend! Thank you for being so easy to work with and adding in my customizations!</p>

                    </div>

                    <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>

                </div>

            </div>


        </div>


    </div>







    <section id="categories" class="p-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                    <img src="img/Template 021.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Illustrations</h5>

                        <a href="illustrations.php" class="btn btn-dark">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <style>
                    video {
                        height: auto;
                        width: auto;
                    }
                </style>
                <div class="card">
                    <video autoplay loop muted>
                        <source src="GIF/Template 003.mp4" type="video/mp4">

                        <source src="GIF/Template 003.ogg" type="video/ogg">
                        Sorry, your browser doesn't support embedded videos.
                    </video>
                    <div class="card-body">
                        <h5 class="card-title">Cartoon GIF</h5>

                        <a href="gifs.php" class="btn btn-dark">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="LOGO/Template 001.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Logos</h5>
                        <a href="logos.php" class="btn btn-dark">Shop Now</a>
                    </div>
                </div>
            </div>


            <div class="col">
                <div class="card">
                    <img src="FLIERS/Template 001.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Fliers</h5>
                        <a href="fliers.php" class="btn btn-dark">Shop Now</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="LOGOGIF/Template 001.gif" alt="logogif">
                    <div class="card-body">
                        <h5 class="card-title">Logo GIF</h5>
                        <a href="logogif.php" class="btn btn-dark">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="PHOTOGIF/Template 001.gif" alt="logogif">
                    <div class="card-body">
                        <h5 class="card-title">Photo GIF</h5>
                        <a href="photogif.php" class="btn btn-dark">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="stickers">
        <div class="container text-center mb-4">
            <h4>You get 5 FREE stickers when you order an illustration or cartoon GIF</h4>
            <div class="col-md-12 text-left">
                <img class="g-width-100 g-brd-around g-brd-gray-light-v4 g-bg-white g-px-15 g-py-10 g-ma-5 border" src="https://suffixdesigns.co/suffix-designs-gifs/stickers1.gif" alt="Image Description" width="100" height="100">
                <img class="g-width-100 g-brd-around g-brd-gray-light-v4 g-bg-white g-px-15 g-py-10 g-ma-5 border" src="https://suffixdesigns.co/suffix-designs-gifs/stickers2.gif" alt="Image Description" width="100" height="100">
                <img class="g-width-100 g-brd-around g-brd-gray-light-v4 g-bg-white g-px-15 g-py-10 g-ma-5 border" src="https://suffixdesigns.co/suffix-designs-gifs/stickers3.gif" alt="Image Description" width="100" height="100">
                <img class="g-width-100 g-brd-around g-brd-gray-light-v4 g-bg-white g-px-15 g-py-10 g-ma-5 border" src="https://suffixdesigns.co/suffix-designs-gifs/stickers4.gif" alt="Image Description" width="100" height="100">
                <img class="g-width-100 g-brd-around g-brd-gray-light-v4 g-bg-white g-px-15 g-py-10 g-ma-5 border" src="https://suffixdesigns.co/suffix-designs-gifs/stickers5.gif" alt="Image Description" width="100" height="100">
                <img class="g-width-100 g-brd-around g-brd-gray-light-v4 g-bg-white g-px-15 g-py-10 g-ma-5 border" src="https://suffixdesigns.co/suffix-designs-gifs/stickers6.gif" alt="Image Description" width="100" height="100">
                <img class="g-width-100 g-brd-around g-brd-gray-light-v4 g-bg-white g-px-15 g-py-10 g-ma-5 border" src="https://suffixdesigns.co/suffix-designs-gifs/stickers7.gif" alt="Image Description" width="100" height="100">
                <img class="g-width-100 g-brd-around g-brd-gray-light-v4 g-bg-white g-px-15 g-py-10 g-ma-5 border" src="https://suffixdesigns.co/suffix-designs-gifs/stickers8.gif" alt="Image Description" width="100" height="100">
                <img class="g-width-100 g-brd-around g-brd-gray-light-v4 g-bg-white g-px-15 g-py-10 g-ma-5 border" src="https://suffixdesigns.co/suffix-designs-gifs/stickers9.gif" alt="Image Description" width="100" height="100">
                <img class="g-width-100 g-brd-around g-brd-gray-light-v4 g-bg-white g-px-15 g-py-10 g-ma-5 border" src="https://suffixdesigns.co/suffix-designs-gifs/stickers10.gif" alt="Image Description" width="100" height="100">
                <img class="g-width-100 g-brd-around g-brd-gray-light-v4 g-bg-white g-px-15 g-py-10 g-ma-5 border" src="https://suffixdesigns.co/suffix-designs-gifs/stickers11.gif" alt="Image Description" width="100" height="100">
                <img class="g-width-110 g-brd-around g-brd-gray-light-v4 g-bg-white g-px-15 g-py-10 g-ma-5 border" src="https://suffixdesigns.co/suffix-designs-gifs/stickers12.gif" alt="Image Description" width="100" height="100">

            </div>
        </div>
    </section>


    <section id="testimonials">
        <div class="container mt-5 mb-5">

            <div class="row g-2">
                <h2 class="text-center">More Testimonials</h2>
                <div class="col-md-4">

                    <div class="card p-3 text-center px-4 shadow">

                        <div class="user-image">

                            <img src="https://suffixdesigns.co/random/christy.JPG" class="rounded-circle" width="80">

                        </div>

                        <div class="user-content">

                            <h5 class="mb-0">Christy Oberg</h5>
                            <small>Realtor, Weichert Realtors Haddonfield</small>
                            <p>Thank you so much! I love what you did and can't wait to use it on my social media!</p>

                        </div>

                        <div class="ratings">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>

                        </div>

                    </div>

                </div>
                <div class="col-md-4">

                    <div class="card p-3 text-center px-4 shadow">

                        <div class="user-image">

                            <img src="https://suffixdesigns.co/random/max.JPG" class="rounded-circle" width="80">

                        </div>

                        <div class="user-content">
                            <h5 class="mb-0">Max Farbstein</h5>
                            <small>Realtor, The Farbstein Team, Douglas Elliman</small>
                            <p>You guys are the best. Appreciate you</p>

                        </div>

                        <div class="ratings">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>

                    </div>

                </div>
                <div class="col-md-4">

                    <div class="card p-3 text-center px-4 shadow">

                        <div class="user-image">

                            <img src="https://suffixdesigns.co/random/rita.jpg" class="rounded-circle" width="80">

                        </div>

                        <div class="user-content">

                            <h5 class="mb-0">Rita Lalita Harnam</h5>
                            <small>Realtor, Cira Group</small>
                            <p>🔥🔥🔥🔥👏👏👏Thank you so much!! Just love it😍</p>

                        </div>

                        <div class="ratings">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>

                    </div>

                </div>


            </div>


        </div>
    </section>


    <section id="faqs">
        <div class="container py-3">
            <h2 class="text-center">Frequently Asked Questions</h2>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            How do I order?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            You can order on our website by choosing a template and proceeding to check out. You can also order by <a href="mailto:info@suffixdesigns.co">emailing us</a>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            What's the turnarount time?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Average turnaround time is 10-14 days for illustrations and cartoon GIFs.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            What do I need to order?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            We need your headshot and logo to get started.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            What if I don't like my order?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            We will make an unlimited number of revisions until you're 100% satisfied.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            What if I have a custom order?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            You can request for a custom design or animation by <a href="mailto:info@suffixdesigns.co">emailing</a>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Who creates my designs or animations?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            We are an agency comprising of artists, graphic designers, web designers and animators who work together to create high quality designs for our clients and customers
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Would I be refunded if I don't like the designs or animations?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Due to the high quality nature of our work and revisions we won't be offering any refunds.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container my-3 py-3">
            <h1 class="text-center">Services</h1>
            <table class="table table-bordered w-500">
                <tr class="table-danger">
                    <td>
                        <h3>Illustrations</h3>
                    </td>
                    <td>
                        <h3>Portraits</h3>
                    </td>
                    <td>
                        <h3>Logos</h3>
                    </td>
                </tr>
                <tr class="table-info">
                    <td>
                        <h3>Animated Stickers/GIFs</h3>
                    </td>
                    <td>
                        <h3>Social media graphics</h3>
                    </td>
                    <td>
                        <h3>Websites</h3>
                    </td>
                </tr>
                <tr class="table-primary">
                    <td>
                        <h3>Landing pages</h3>
                    </td>
                    <td>
                        <h3>Email Graphics</h3>
                    </td>
                    <td>
                        <h3>Fliers</h3>
                    </td>
                </tr>
                <tr class="table-light">
                    <td>
                        <h3>Email marketing templates</h3>
                    </td>
                    <td>
                        <h3>Business cards</h3>
                    </td>
                    <td>
                        <h3>Animations</h3>
                    </td>
                </tr>
            </table>
        </div>
    </section>

    <section id="membership-plan">
        <div class="container py-5">
            <h1 class="text-center">Outsource your content creation designs to us.</h1>
            <p class="text-center">We take away the pain and stress of creating designs for your business</p>
            <h4 class="text-center">Subscription Plans</h4>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col text-center">
                    <h3>Growth</h3>
                    <div class="pricing-amount">$995</div>
                    <div class="pricing-info">Pause or cancel anytime</div>
                    <div class="button py-2"><a href="contact.html" class="btn btn-dark btn-lg active" role="button" aria-pressed="true">Get Started</a></div>
                    <div class="button py-2"><a href="contact.html" class="btn btn-light btn-lg active" role="button" aria-pressed="true">Book a call</a></div>
                    <p>20 requests</p>
                    <p>Unlimited brands/users</p>
                    <p>Unlimited revisions</p>
                    <p>Pause or cancel at anytime</p>
                </div>
                <div class="col text-center">
                    <h3>Hyper Growth</h3>
                    <div class="pricing-amount">$1495</div>
                    <div class="pricing-info">Pause or cancel anytime</div>
                    <div class="button py-2"><a href="contact.html" class="btn btn-dark btn-lg active" role="button" aria-pressed="true">Get Started</a></div>
                    <div class="button py-2"><a href="contact.html" class="btn btn-light btn-lg active" role="button" aria-pressed="true">Book a call</a></div>
                    <p>30 requests</p>
                    <p>Unlimited brands/users</p>
                    <p>Unlimited revisions</p>
                    <p>Pause or cancel at anytime</p>
                </div>
                <div class="col text-center">
                    <h3>Premium</h3>
                    <div class="pricing-amount">$2995</div>
                    <div class="pricing-info">Pause or cancel anytime</div>
                    <div class="button py-2"><a href="contact.html" class="btn btn-dark btn-lg active" role="button" aria-pressed="true">Get Started</a></div>
                    <div class="button py-2"><a href="contact.html" class="btn btn-light btn-lg active" role="button" aria-pressed="true">Book a call</a></div>
                    <p>Unlimited requests</p>
                    <p>Unlimited brands/users</p>
                    <p>Unlimited revisions</p>
                    <p>Pause or cancel at anytime</p>
                </div>
            </div>

            <h2 class="text-center">Frequently Asked Questions</h2>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button bg-black text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            How do I order?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapsed" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-black text-white">
                            You can order on our website by choosing a template and proceeding to check out. You can also order by <a href="mailto:info@suffixdesigns.co">emailing us</a>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button bg-black text-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            What's the turnarount time?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Average turnaround time is 10-14 days for illustrations and cartoon GIFs.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button bg-black text-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            What do I need to order?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-black text-white">
                            We need your headshot and logo to get started.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button bg-black text-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            What if I don't like my order?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-black text-white">
                            We will make an unlimited number of revisions until you're 100% satisfied.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button bg-black text-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            What if I have a custom order?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-black text-white">
                            You can request for a custom design or animation by <a href="mailto:info@suffixdesigns.co">emailing</a>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button bg-black text-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Who creates my designs or animations?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-black text-white">
                            We are an agency comprising of artists, graphic designers, web designers and animators who work together to create high quality designs for our clients and customers
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button bg-black text-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Would I be refunded if I don't like the designs or animations?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-black text-white">
                            Due to the high quality nature of our work and revisions we won't be offering any refunds.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="websites">
        <div class="container py-5">
            <h2 class="text-center">Get a custom website for your business</h2>
            <p class="text-center">Scale your business with our high performing websites</p>
            <h4 class="text-center">Pricing</h4>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col text-center">
                    <h3>Ecommerce</h3>
                    <div class="pricing-amount">$2,995</div>
                    <div class="button py-2"><a href="contact.html" class="btn btn-dark btn-lg active" role="button" aria-pressed="true">Get Started</a></div>
                    <div class="button py-2"><a href="contact.html" class="btn btn-light btn-lg active" role="button" aria-pressed="true">Book a call</a></div>
                    <p>Unlimited revisions</p>
                </div>

                <div class="col text-center">
                    <h3>Real Estate</h3>
                    <div class="pricing-amount">$1,495</div>
                    <div class="button py-2"><a href="contact.html" class="btn btn-dark btn-lg active" role="button" aria-pressed="true">Get Started</a></div>
                    <div class="button py-2"><a href="contact.html" class="btn btn-light btn-lg active" role="button" aria-pressed="true">Book a call</a></div>
                    <p>Unlimited revisions</p>
                </div>

                <div class="col text-center">
                    <h4>Portfolio/Agency website</h4>
                    <div class="pricing-amount">$1,000</div>
                    <div class="button py-2"><a href="contact.html" class="btn btn-dark btn-lg active" role="button" aria-pressed="true">Get Started</a></div>
                    <div class="button py-2"><a href="contact.html" class="btn btn-light btn-lg active" role="button" aria-pressed="true">Book a call</a></div>
                    <p>Unlimited revisions</p>
                </div>

            </div>
            <div class="gradient"></div>
            <h1 class="text-center">We run your website for you so you can focus on the most important things!</h1>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col text-center">
                    <h3>Ecommerce + monthly maintenance</h3>
                    <div class="pricing-amount">$2,995/m</div>
                    <div class="pricing-info">Pause or cancel anytime</div>
                    <div class="button py-2"><a href="contact.html" class="btn btn-dark btn-lg active" role="button" aria-pressed="true">Get Started</a></div>
                    <div class="button py-2"><a href="contact.html" class="btn btn-light btn-lg active" role="button" aria-pressed="true">Book a call</a></div>
                    <p>$1000 monthly maintenance and store running fee(uploading products, updating prices, tracking orders, etc)</p>
                    <p>P.S. To be paid once website is completed</p>
                </div>
                <div class="col text-center">
                    <h3>Real Estate + Monthly maintenance</h3>
                    <div class="pricing-amount">$1,495/m</div>
                    <div class="pricing-info">Pause or cancel anytime</div>
                    <div class="button py-2"><a href="contact.html" class="btn btn-dark btn-lg active" role="button" aria-pressed="true">Get Started</a></div>
                    <div class="button py-2"><a href="contact.html" class="btn btn-light btn-lg active" role="button" aria-pressed="true">Book a call</a></div>
                    <p></p>
                    <p>unlimited revisions</p>
                </div>
            </div>

            <h2 class="text-center">Frequently Asked Questions</h2>
            <div class="accordion text-left" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            How do I order?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapsed" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light">
                            You can order on our website by choosing a template and proceeding to check out. You can also order by <a href="mailto:info@suffixdesigns.co">emailing us</a>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            What's the turnarount time?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light">
                            Average turnaround time is 10-14 days for illustrations and cartoon GIFs.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            What do I need to order?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light">
                            We need your headshot and logo to get started.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            What if I don't like my order?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light">
                            We will make an unlimited number of revisions until you're 100% satisfied.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            What if I have a custom order?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light">
                            You can request for a custom design or animation by <a href="mailto:info@suffixdesigns.co">emailing</a>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Who creates my designs or animations?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light">
                            We are an agency comprising of artists, graphic designers, web designers and animators who work together to create high quality designs for our clients and customers
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button bg-light collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Would I be refunded if I don't like the designs or animations?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-light">
                            Due to the high quality nature of our work and revisions we won't be offering any refunds.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="clients">
        <div class="container text-center mb-4 pt-4">
            <div class="col-md-12 text-left">
                <img class="g-width-100 g-brd-around g-brd-gray-light-v4 g-bg-white g-px-15 g-py-10 g-ma-5 border" src="Assets/Reviews/client1.jpg" alt="Image Description" width="75" height="75">
                <img class="g-width-100 g-brd-around g-brd-gray-light-v4 g-bg-white g-px-15 g-py-10 g-ma-5 border" src="Assets/Reviews/client2.jpg" alt="Image Description" width="75" height="75">
                <img class="g-width-100 g-brd-around g-brd-gray-light-v4 g-bg-white g-px-15 g-py-10 g-ma-5 border" src="Assets/Reviews/client3.jpg" alt="Image Description" width="75" height="75">
                <img class="g-width-100 g-brd-around g-brd-gray-light-v4 g-bg-white g-px-15 g-py-10 g-ma-5 border" src="Assets/Reviews/client4.jpg" alt="Image Description" width="75" height="75">
                <img class="g-width-100 g-brd-around g-brd-gray-light-v4 g-bg-white g-px-15 g-py-10 g-ma-5 border" src="Assets/Reviews/client5.jpg" alt="Image Description" width="75" height="75">
                <img class="g-width-100 g-brd-around g-brd-gray-light-v4 g-bg-white g-px-15 g-py-10 g-ma-5 border" src="Assets/Reviews/client6.jpg" alt="Image Description" width="75" height="75">
                <img class="g-width-100 g-brd-around g-brd-gray-light-v4 g-bg-white g-px-15 g-py-10 g-ma-5 border" src="Assets/Reviews/client7.jpg" alt="Image Description" width="75" height="75">
                <img class="g-width-100 g-brd-around g-brd-gray-light-v4 g-bg-white g-px-15 g-py-10 g-ma-5 border" src="Assets/Reviews/client8.jpg" alt="Image Description" width="75" height="75">
                <img class="g-width-100 g-brd-around g-brd-gray-light-v4 g-bg-white g-px-15 g-py-10 g-ma-5 border" src="Assets/Reviews/client9.jpg" alt="Image Description" width="75" height="75">
                <img class="g-width-100 g-brd-around g-brd-gray-light-v4 g-bg-white g-px-15 g-py-10 g-ma-5 border" src="Assets/Reviews/client10.png" alt="Image Description" width="75" height="75">
                <img class="g-width-100 g-brd-around g-brd-gray-light-v4 g-bg-white g-px-15 g-py-10 g-ma-5 border" src="Assets/Reviews/client11.jpg" alt="Image Description" width="75" height="75">
                <img class="g-width-110 g-brd-around g-brd-gray-light-v4 g-bg-white g-px-15 g-py-10 g-ma-5 border" src="Assets/Reviews/client12.jpg" alt="Image Description" width="75" height="75">
            </div>
        </div>
    </section>
    <footer class="py-5 px-3 bg-dark">
        <div class="row">
            <div class="col-6 col-md-2 mb-3">
                <h5 class="text-white">Help</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="blog.php" class="nav-link p-0 text-muted">Blog</a></li>
                    <li class="nav-item mb-2"><a href="contact.html" class="nav-link p-0 text-muted">Contact Us</a></li>
                    <li class="nav-item mb-2"><a href="calendly.php" class="nav-link p-0 text-muted">Schedule a call</a></li>
                    <li class="nav-item mb-2"><a href="contact.html" class="nav-link p-0 text-muted">Custom Order</a></li>
                </ul>
            </div>

            <div class="col-6 col-md-2 mb-3">
                <h5 class="text-white">Faq</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="faqs.html" class="nav-link p-0 text-muted">Turnaround Time</a></li>
                    <li class="nav-item mb-2"><a href="faqs.html" class="nav-link p-0 text-muted">How to Order</a></li>
                    <li class="nav-item mb-2"><a href="refundpolicy.html" class="nav-link p-0 text-muted">Refund Policy</a></li>
                </ul>
            </div>

            <div class="col-6 col-md-2 mb-3">
                <h5 class="text-white">Info</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="about.html" class="nav-link p-0 text-muted">About Us</a></li>
                    <li class="nav-item mb-2"><a href="privacy.html" class="nav-link p-0 text-muted">Terms and Privacy Policy</a></li>
                    <li class="nav-item mb-2"><a href="copyright.html" class="nav-link p-0 text-muted">Copyright</a></li>

                </ul>
            </div>

            <div class="col-md-5 offset-md-1 mb-3">
                <form action="newsletter.php" method="POST">
                    <h5 class="text-white">Subscribe to our newsletter</h5>
                    <p class="text-white">Monthly digest of what's new and exciting from us.</p>
                    <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                        <label for="newsletter1" class="visually-hidden">Email address</label>
                        <input id="newsletter1" type="email" class="form-control" placeholder="Email address" name="email" required>
                        <button class="btn btn-primary" type="submit" name="submit">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
            <p class="text-white">© 2022 Suffix Designs. All rights reserved.</p>
            <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="link-light" href="http://wa.me/2348104933232"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                        </svg></a></li>
                <li class="ms-3"><a class="link-light" href="http://www.instagram.com/suffix_designs"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                        </svg></a></li>
                <li class="ms-3"><a class="link-light" href="http://www.m.me/suffixdesigns"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-messenger" viewBox="0 0 16 16">
                            <path d="M0 7.76C0 3.301 3.493 0 8 0s8 3.301 8 7.76-3.493 7.76-8 7.76c-.81 0-1.586-.107-2.316-.307a.639.639 0 0 0-.427.03l-1.588.702a.64.64 0 0 1-.898-.566l-.044-1.423a.639.639 0 0 0-.215-.456C.956 12.108 0 10.092 0 7.76zm5.546-1.459-2.35 3.728c-.225.358.214.761.551.506l2.525-1.916a.48.48 0 0 1 .578-.002l1.869 1.402a1.2 1.2 0 0 0 1.735-.32l2.35-3.728c.226-.358-.214-.761-.551-.506L9.728 7.381a.48.48 0 0 1-.578.002L7.281 5.98a1.2 1.2 0 0 0-1.735.32z" />
                        </svg></a></li>
                <li class="ms-3"><a class="link-light" href="http://www.facebook.com/suffixdesigns"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg></a></li>
                <li class="ms-3"><a class="link-light" href="https://twitter.com/SuffixDesigns"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                        </svg></a></li>
                <li class="ms-3"><a class="link-light" href="https://www.linkedin.com/company/suffix-designs/"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                        </svg></a></li>
            </ul>
        </div>
        <style>
            .fa-stripe {
                color: white;
            }
        </style>
        <div class="container text-center mb-4 pt-4">
            <div class="col-md-12 text-left">
                <i class="fa-brands fa-stripe fa-2xl"></i>
                <svg class="payment-icons__icon" version="1.1" xmlns="http://www.w3.org/2000/svg" role="img" x="0" y="0" width="38" height="24" viewBox="0 0 165.521 105.965" xml:space="preserve" aria-labelledby="pi-apple_pay">
                    <title id="pi-apple_pay">Apple Pay</title>
                    <path fill="#000" d="M150.698 0H14.823c-.566 0-1.133 0-1.698.003-.477.004-.953.009-1.43.022-1.039.028-2.087.09-3.113.274a10.51 10.51 0 0 0-2.958.975 9.932 9.932 0 0 0-4.35 4.35 10.463 10.463 0 0 0-.975 2.96C.113 9.611.052 10.658.024 11.696a70.22 70.22 0 0 0-.022 1.43C0 13.69 0 14.256 0 14.823v76.318c0 .567 0 1.132.002 1.699.003.476.009.953.022 1.43.028 1.036.09 2.084.275 3.11a10.46 10.46 0 0 0 .974 2.96 9.897 9.897 0 0 0 1.83 2.52 9.874 9.874 0 0 0 2.52 1.83c.947.483 1.917.79 2.96.977 1.025.183 2.073.245 3.112.273.477.011.953.017 1.43.02.565.004 1.132.004 1.698.004h135.875c.565 0 1.132 0 1.697-.004.476-.002.952-.009 1.431-.02 1.037-.028 2.085-.09 3.113-.273a10.478 10.478 0 0 0 2.958-.977 9.955 9.955 0 0 0 4.35-4.35c.483-.947.789-1.917.974-2.96.186-1.026.246-2.074.274-3.11.013-.477.02-.954.022-1.43.004-.567.004-1.132.004-1.699V14.824c0-.567 0-1.133-.004-1.699a63.067 63.067 0 0 0-.022-1.429c-.028-1.038-.088-2.085-.274-3.112a10.4 10.4 0 0 0-.974-2.96 9.94 9.94 0 0 0-4.35-4.35A10.52 10.52 0 0 0 156.939.3c-1.028-.185-2.076-.246-3.113-.274a71.417 71.417 0 0 0-1.431-.022C151.83 0 151.263 0 150.698 0z"></path>
                    <path fill="#FFF" d="M150.698 3.532l1.672.003c.452.003.905.008 1.36.02.793.022 1.719.065 2.583.22.75.135 1.38.34 1.984.648a6.392 6.392 0 0 1 2.804 2.807c.306.6.51 1.226.645 1.983.154.854.197 1.783.218 2.58.013.45.019.9.02 1.36.005.557.005 1.113.005 1.671v76.318c0 .558 0 1.114-.004 1.682-.002.45-.008.9-.02 1.35-.022.796-.065 1.725-.221 2.589a6.855 6.855 0 0 1-.645 1.975 6.397 6.397 0 0 1-2.808 2.807c-.6.306-1.228.511-1.971.645-.881.157-1.847.2-2.574.22-.457.01-.912.017-1.379.019-.555.004-1.113.004-1.669.004H14.801c-.55 0-1.1 0-1.66-.004a74.993 74.993 0 0 1-1.35-.018c-.744-.02-1.71-.064-2.584-.22a6.938 6.938 0 0 1-1.986-.65 6.337 6.337 0 0 1-1.622-1.18 6.355 6.355 0 0 1-1.178-1.623 6.935 6.935 0 0 1-.646-1.985c-.156-.863-.2-1.788-.22-2.578a66.088 66.088 0 0 1-.02-1.355l-.003-1.327V14.474l.002-1.325a66.7 66.7 0 0 1 .02-1.357c.022-.792.065-1.717.222-2.587a6.924 6.924 0 0 1 .646-1.981c.304-.598.7-1.144 1.18-1.623a6.386 6.386 0 0 1 1.624-1.18 6.96 6.96 0 0 1 1.98-.646c.865-.155 1.792-.198 2.586-.22.452-.012.905-.017 1.354-.02l1.677-.003h135.875"></path>
                    <g>
                        <g>
                            <path fill="#000" d="M43.508 35.77c1.404-1.755 2.356-4.112 2.105-6.52-2.054.102-4.56 1.355-6.012 3.112-1.303 1.504-2.456 3.959-2.156 6.266 2.306.2 4.61-1.152 6.063-2.858"></path>
                            <path fill="#000" d="M45.587 39.079c-3.35-.2-6.196 1.9-7.795 1.9-1.6 0-4.049-1.8-6.698-1.751-3.447.05-6.645 2-8.395 5.1-3.598 6.2-.95 15.4 2.55 20.45 1.699 2.5 3.747 5.25 6.445 5.151 2.55-.1 3.549-1.65 6.647-1.65 3.097 0 3.997 1.65 6.696 1.6 2.798-.05 4.548-2.5 6.247-5 1.95-2.85 2.747-5.6 2.797-5.75-.05-.05-5.396-2.101-5.446-8.251-.05-5.15 4.198-7.6 4.398-7.751-2.399-3.548-6.147-3.948-7.447-4.048"></path>
                        </g>
                        <g>
                            <path fill="#000" d="M78.973 32.11c7.278 0 12.347 5.017 12.347 12.321 0 7.33-5.173 12.373-12.529 12.373h-8.058V69.62h-5.822V32.11h14.062zm-8.24 19.807h6.68c5.07 0 7.954-2.729 7.954-7.46 0-4.73-2.885-7.434-7.928-7.434h-6.706v14.894z"></path>
                            <path fill="#000" d="M92.764 61.847c0-4.809 3.665-7.564 10.423-7.98l7.252-.442v-2.08c0-3.04-2.001-4.704-5.562-4.704-2.938 0-5.07 1.507-5.51 3.82h-5.252c.157-4.86 4.731-8.395 10.918-8.395 6.654 0 10.995 3.483 10.995 8.89v18.663h-5.38v-4.497h-.13c-1.534 2.937-4.914 4.782-8.579 4.782-5.406 0-9.175-3.222-9.175-8.057zm17.675-2.417v-2.106l-6.472.416c-3.64.234-5.536 1.585-5.536 3.95 0 2.288 1.975 3.77 5.068 3.77 3.95 0 6.94-2.522 6.94-6.03z"></path>
                            <path fill="#000" d="M120.975 79.652v-4.496c.364.051 1.247.103 1.715.103 2.573 0 4.029-1.09 4.913-3.899l.52-1.663-9.852-27.293h6.082l6.863 22.146h.13l6.862-22.146h5.927l-10.216 28.67c-2.34 6.577-5.017 8.735-10.683 8.735-.442 0-1.872-.052-2.261-.157z"></path>
                        </g>
                    </g>
                </svg>

                <svg class="payment-icons__icon" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-visa">
                    <title id="pi-visa">Visa</title>
                    <path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"></path>
                    <path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"></path>
                    <path d="M28.3 10.1H28c-.4 1-.7 1.5-1 3h1.9c-.3-1.5-.3-2.2-.6-3zm2.9 5.9h-1.7c-.1 0-.1 0-.2-.1l-.2-.9-.1-.2h-2.4c-.1 0-.2 0-.2.2l-.3.9c0 .1-.1.1-.1.1h-2.1l.2-.5L27 8.7c0-.5.3-.7.8-.7h1.5c.1 0 .2 0 .2.2l1.4 6.5c.1.4.2.7.2 1.1.1.1.1.1.1.2zm-13.4-.3l.4-1.8c.1 0 .2.1.2.1.7.3 1.4.5 2.1.4.2 0 .5-.1.7-.2.5-.2.5-.7.1-1.1-.2-.2-.5-.3-.8-.5-.4-.2-.8-.4-1.1-.7-1.2-1-.8-2.4-.1-3.1.6-.4.9-.8 1.7-.8 1.2 0 2.5 0 3.1.2h.1c-.1.6-.2 1.1-.4 1.7-.5-.2-1-.4-1.5-.4-.3 0-.6 0-.9.1-.2 0-.3.1-.4.2-.2.2-.2.5 0 .7l.5.4c.4.2.8.4 1.1.6.5.3 1 .8 1.1 1.4.2.9-.1 1.7-.9 2.3-.5.4-.7.6-1.4.6-1.4 0-2.5.1-3.4-.2-.1.2-.1.2-.2.1zm-3.5.3c.1-.7.1-.7.2-1 .5-2.2 1-4.5 1.4-6.7.1-.2.1-.3.3-.3H18c-.2 1.2-.4 2.1-.7 3.2-.3 1.5-.6 3-1 4.5 0 .2-.1.2-.3.2M5 8.2c0-.1.2-.2.3-.2h3.4c.5 0 .9.3 1 .8l.9 4.4c0 .1 0 .1.1.2 0-.1.1-.1.1-.1l2.1-5.1c-.1-.1 0-.2.1-.2h2.1c0 .1 0 .1-.1.2l-3.1 7.3c-.1.2-.1.3-.2.4-.1.1-.3 0-.5 0H9.7c-.1 0-.2 0-.2-.2L7.9 9.5c-.2-.2-.5-.5-.9-.6-.6-.3-1.7-.5-1.9-.5L5 8.2z" fill="#142688"></path>
                </svg>
                <svg class="payment-icons__icon" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-master">
                    <title id="pi-master">Mastercard</title>
                    <path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"></path>
                    <path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"></path>
                    <circle fill="#EB001B" cx="15" cy="12" r="7"></circle>
                    <circle fill="#F79E1B" cx="23" cy="12" r="7"></circle>
                    <path fill="#FF5F00" d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z"></path>
                </svg>
                <svg class="payment-icons__icon" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24" width="38" height="24" aria-labelledby="pi-american_express">
                    <title id="pi-american_express">American Express</title>
                    <g fill="none">
                        <path fill="#000" d="M35,0 L3,0 C1.3,0 0,1.3 0,3 L0,21 C0,22.7 1.4,24 3,24 L35,24 C36.7,24 38,22.7 38,21 L38,3 C38,1.3 36.6,0 35,0 Z" opacity=".07"></path>
                        <path fill="#006FCF" d="M35,1 C36.1,1 37,1.9 37,3 L37,21 C37,22.1 36.1,23 35,23 L3,23 C1.9,23 1,22.1 1,21 L1,3 C1,1.9 1.9,1 3,1 L35,1"></path>
                        <path fill="#FFF" d="M8.971,10.268 L9.745,12.144 L8.203,12.144 L8.971,10.268 Z M25.046,10.346 L22.069,10.346 L22.069,11.173 L24.998,11.173 L24.998,12.412 L22.075,12.412 L22.075,13.334 L25.052,13.334 L25.052,14.073 L27.129,11.828 L25.052,9.488 L25.046,10.346 L25.046,10.346 Z M10.983,8.006 L14.978,8.006 L15.865,9.941 L16.687,8 L27.057,8 L28.135,9.19 L29.25,8 L34.013,8 L30.494,11.852 L33.977,15.68 L29.143,15.68 L28.065,14.49 L26.94,15.68 L10.03,15.68 L9.536,14.49 L8.406,14.49 L7.911,15.68 L4,15.68 L7.286,8 L10.716,8 L10.983,8.006 Z M19.646,9.084 L17.407,9.084 L15.907,12.62 L14.282,9.084 L12.06,9.084 L12.06,13.894 L10,9.084 L8.007,9.084 L5.625,14.596 L7.18,14.596 L7.674,13.406 L10.27,13.406 L10.764,14.596 L13.484,14.596 L13.484,10.661 L15.235,14.602 L16.425,14.602 L18.165,10.673 L18.165,14.603 L19.623,14.603 L19.647,9.083 L19.646,9.084 Z M28.986,11.852 L31.517,9.084 L29.695,9.084 L28.094,10.81 L26.546,9.084 L20.652,9.084 L20.652,14.602 L26.462,14.602 L28.076,12.864 L29.624,14.602 L31.499,14.602 L28.987,11.852 L28.986,11.852 Z"></path>
                    </g>
                </svg>
                <svg class="payment-icons__icon" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24" width="38" height="24" aria-labelledby="pi-google_pay">
                    <title id="pi-google_pay">Google Pay</title>
                    <path d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z" fill="#000" opacity=".07"></path>
                    <path d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32" fill="#FFF"></path>
                    <path d="M18.093 11.976v3.2h-1.018v-7.9h2.691a2.447 2.447 0 0 1 1.747.692 2.28 2.28 0 0 1 .11 3.224l-.11.116c-.47.447-1.098.69-1.747.674l-1.673-.006zm0-3.732v2.788h1.698c.377.012.741-.135 1.005-.404a1.391 1.391 0 0 0-1.005-2.354l-1.698-.03zm6.484 1.348c.65-.03 1.286.188 1.778.613.445.43.682 1.03.65 1.649v3.334h-.969v-.766h-.049a1.93 1.93 0 0 1-1.673.931 2.17 2.17 0 0 1-1.496-.533 1.667 1.667 0 0 1-.613-1.324 1.606 1.606 0 0 1 .613-1.336 2.746 2.746 0 0 1 1.698-.515c.517-.02 1.03.093 1.49.331v-.208a1.134 1.134 0 0 0-.417-.901 1.416 1.416 0 0 0-.98-.368 1.545 1.545 0 0 0-1.319.717l-.895-.564a2.488 2.488 0 0 1 2.182-1.06zM23.29 13.52a.79.79 0 0 0 .337.662c.223.176.5.269.785.263.429-.001.84-.17 1.146-.472.305-.286.478-.685.478-1.103a2.047 2.047 0 0 0-1.324-.374 1.716 1.716 0 0 0-1.03.294.883.883 0 0 0-.392.73zm9.286-3.75l-3.39 7.79h-1.048l1.281-2.728-2.224-5.062h1.103l1.612 3.885 1.569-3.885h1.097z" fill="#5F6368"></path>
                    <path d="M13.986 11.284c0-.308-.024-.616-.073-.92h-4.29v1.747h2.451a2.096 2.096 0 0 1-.9 1.373v1.134h1.464a4.433 4.433 0 0 0 1.348-3.334z" fill="#4285F4"></path>
                    <path d="M9.629 15.721a4.352 4.352 0 0 0 3.01-1.097l-1.466-1.14a2.752 2.752 0 0 1-4.094-1.44H5.577v1.17a4.53 4.53 0 0 0 4.052 2.507z" fill="#34A853"></path>
                    <path d="M7.079 12.05a2.709 2.709 0 0 1 0-1.735v-1.17H5.577a4.505 4.505 0 0 0 0 4.075l1.502-1.17z" fill="#FBBC04"></path>
                    <path d="M9.629 8.44a2.452 2.452 0 0 1 1.74.68l1.3-1.293a4.37 4.37 0 0 0-3.065-1.183 4.53 4.53 0 0 0-4.027 2.5l1.502 1.171a2.715 2.715 0 0 1 2.55-1.875z" fill="#EA4335"></path>
                </svg>
                <svg class="payment-icons__icon" version="1.1" xmlns="http://www.w3.org/2000/svg" role="img" x="0" y="0" width="38" height="24" viewBox="0 0 165.521 105.965" xml:space="preserve" aria-labelledby="pi-apple_pay">
                    <title id="pi-apple_pay">Apple Pay</title>
                    <path fill="#000" d="M150.698 0H14.823c-.566 0-1.133 0-1.698.003-.477.004-.953.009-1.43.022-1.039.028-2.087.09-3.113.274a10.51 10.51 0 0 0-2.958.975 9.932 9.932 0 0 0-4.35 4.35 10.463 10.463 0 0 0-.975 2.96C.113 9.611.052 10.658.024 11.696a70.22 70.22 0 0 0-.022 1.43C0 13.69 0 14.256 0 14.823v76.318c0 .567 0 1.132.002 1.699.003.476.009.953.022 1.43.028 1.036.09 2.084.275 3.11a10.46 10.46 0 0 0 .974 2.96 9.897 9.897 0 0 0 1.83 2.52 9.874 9.874 0 0 0 2.52 1.83c.947.483 1.917.79 2.96.977 1.025.183 2.073.245 3.112.273.477.011.953.017 1.43.02.565.004 1.132.004 1.698.004h135.875c.565 0 1.132 0 1.697-.004.476-.002.952-.009 1.431-.02 1.037-.028 2.085-.09 3.113-.273a10.478 10.478 0 0 0 2.958-.977 9.955 9.955 0 0 0 4.35-4.35c.483-.947.789-1.917.974-2.96.186-1.026.246-2.074.274-3.11.013-.477.02-.954.022-1.43.004-.567.004-1.132.004-1.699V14.824c0-.567 0-1.133-.004-1.699a63.067 63.067 0 0 0-.022-1.429c-.028-1.038-.088-2.085-.274-3.112a10.4 10.4 0 0 0-.974-2.96 9.94 9.94 0 0 0-4.35-4.35A10.52 10.52 0 0 0 156.939.3c-1.028-.185-2.076-.246-3.113-.274a71.417 71.417 0 0 0-1.431-.022C151.83 0 151.263 0 150.698 0z"></path>
                    <path fill="#FFF" d="M150.698 3.532l1.672.003c.452.003.905.008 1.36.02.793.022 1.719.065 2.583.22.75.135 1.38.34 1.984.648a6.392 6.392 0 0 1 2.804 2.807c.306.6.51 1.226.645 1.983.154.854.197 1.783.218 2.58.013.45.019.9.02 1.36.005.557.005 1.113.005 1.671v76.318c0 .558 0 1.114-.004 1.682-.002.45-.008.9-.02 1.35-.022.796-.065 1.725-.221 2.589a6.855 6.855 0 0 1-.645 1.975 6.397 6.397 0 0 1-2.808 2.807c-.6.306-1.228.511-1.971.645-.881.157-1.847.2-2.574.22-.457.01-.912.017-1.379.019-.555.004-1.113.004-1.669.004H14.801c-.55 0-1.1 0-1.66-.004a74.993 74.993 0 0 1-1.35-.018c-.744-.02-1.71-.064-2.584-.22a6.938 6.938 0 0 1-1.986-.65 6.337 6.337 0 0 1-1.622-1.18 6.355 6.355 0 0 1-1.178-1.623 6.935 6.935 0 0 1-.646-1.985c-.156-.863-.2-1.788-.22-2.578a66.088 66.088 0 0 1-.02-1.355l-.003-1.327V14.474l.002-1.325a66.7 66.7 0 0 1 .02-1.357c.022-.792.065-1.717.222-2.587a6.924 6.924 0 0 1 .646-1.981c.304-.598.7-1.144 1.18-1.623a6.386 6.386 0 0 1 1.624-1.18 6.96 6.96 0 0 1 1.98-.646c.865-.155 1.792-.198 2.586-.22.452-.012.905-.017 1.354-.02l1.677-.003h135.875"></path>
                    <g>
                        <g>
                            <path fill="#000" d="M43.508 35.77c1.404-1.755 2.356-4.112 2.105-6.52-2.054.102-4.56 1.355-6.012 3.112-1.303 1.504-2.456 3.959-2.156 6.266 2.306.2 4.61-1.152 6.063-2.858"></path>
                            <path fill="#000" d="M45.587 39.079c-3.35-.2-6.196 1.9-7.795 1.9-1.6 0-4.049-1.8-6.698-1.751-3.447.05-6.645 2-8.395 5.1-3.598 6.2-.95 15.4 2.55 20.45 1.699 2.5 3.747 5.25 6.445 5.151 2.55-.1 3.549-1.65 6.647-1.65 3.097 0 3.997 1.65 6.696 1.6 2.798-.05 4.548-2.5 6.247-5 1.95-2.85 2.747-5.6 2.797-5.75-.05-.05-5.396-2.101-5.446-8.251-.05-5.15 4.198-7.6 4.398-7.751-2.399-3.548-6.147-3.948-7.447-4.048"></path>
                        </g>
                        <g>
                            <path fill="#000" d="M78.973 32.11c7.278 0 12.347 5.017 12.347 12.321 0 7.33-5.173 12.373-12.529 12.373h-8.058V69.62h-5.822V32.11h14.062zm-8.24 19.807h6.68c5.07 0 7.954-2.729 7.954-7.46 0-4.73-2.885-7.434-7.928-7.434h-6.706v14.894z"></path>
                            <path fill="#000" d="M92.764 61.847c0-4.809 3.665-7.564 10.423-7.98l7.252-.442v-2.08c0-3.04-2.001-4.704-5.562-4.704-2.938 0-5.07 1.507-5.51 3.82h-5.252c.157-4.86 4.731-8.395 10.918-8.395 6.654 0 10.995 3.483 10.995 8.89v18.663h-5.38v-4.497h-.13c-1.534 2.937-4.914 4.782-8.579 4.782-5.406 0-9.175-3.222-9.175-8.057zm17.675-2.417v-2.106l-6.472.416c-3.64.234-5.536 1.585-5.536 3.95 0 2.288 1.975 3.77 5.068 3.77 3.95 0 6.94-2.522 6.94-6.03z"></path>
                            <path fill="#000" d="M120.975 79.652v-4.496c.364.051 1.247.103 1.715.103 2.573 0 4.029-1.09 4.913-3.899l.52-1.663-9.852-27.293h6.082l6.863 22.146h.13l6.862-22.146h5.927l-10.216 28.67c-2.34 6.577-5.017 8.735-10.683 8.735-.442 0-1.872-.052-2.261-.157z"></path>
                        </g>
                    </g>
                </svg>
                <svg class="payment-icons__icon" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-diners_club">
                    <title id="pi-diners_club">Diners Club</title>
                    <path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"></path>
                    <path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"></path>
                    <path d="M12 12v3.7c0 .3-.2.3-.5.2-1.9-.8-3-3.3-2.3-5.4.4-1.1 1.2-2 2.3-2.4.4-.2.5-.1.5.2V12zm2 0V8.3c0-.3 0-.3.3-.2 2.1.8 3.2 3.3 2.4 5.4-.4 1.1-1.2 2-2.3 2.4-.4.2-.4.1-.4-.2V12zm7.2-7H13c3.8 0 6.8 3.1 6.8 7s-3 7-6.8 7h8.2c3.8 0 6.8-3.1 6.8-7s-3-7-6.8-7z" fill="#3086C8"></path>
                </svg>
                <svg class="payment-icons__icon" viewBox="0 0 38 24" width="38" height="24" role="img" aria-labelledby="pi-discover" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <title id="pi-discover">Discover</title>
                    <path fill="#000" opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"></path>
                    <path d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32z" fill="#fff"></path>
                    <path d="M3.57 7.16H2v5.5h1.57c.83 0 1.43-.2 1.96-.63.63-.52 1-1.3 1-2.11-.01-1.63-1.22-2.76-2.96-2.76zm1.26 4.14c-.34.3-.77.44-1.47.44h-.29V8.1h.29c.69 0 1.11.12 1.47.44.37.33.59.84.59 1.37 0 .53-.22 1.06-.59 1.39zm2.19-4.14h1.07v5.5H7.02v-5.5zm3.69 2.11c-.64-.24-.83-.4-.83-.69 0-.35.34-.61.8-.61.32 0 .59.13.86.45l.56-.73c-.46-.4-1.01-.61-1.62-.61-.97 0-1.72.68-1.72 1.58 0 .76.35 1.15 1.35 1.51.42.15.63.25.74.31.21.14.32.34.32.57 0 .45-.35.78-.83.78-.51 0-.92-.26-1.17-.73l-.69.67c.49.73 1.09 1.05 1.9 1.05 1.11 0 1.9-.74 1.9-1.81.02-.89-.35-1.29-1.57-1.74zm1.92.65c0 1.62 1.27 2.87 2.9 2.87.46 0 .86-.09 1.34-.32v-1.26c-.43.43-.81.6-1.29.6-1.08 0-1.85-.78-1.85-1.9 0-1.06.79-1.89 1.8-1.89.51 0 .9.18 1.34.62V7.38c-.47-.24-.86-.34-1.32-.34-1.61 0-2.92 1.28-2.92 2.88zm12.76.94l-1.47-3.7h-1.17l2.33 5.64h.58l2.37-5.64h-1.16l-1.48 3.7zm3.13 1.8h3.04v-.93h-1.97v-1.48h1.9v-.93h-1.9V8.1h1.97v-.94h-3.04v5.5zm7.29-3.87c0-1.03-.71-1.62-1.95-1.62h-1.59v5.5h1.07v-2.21h.14l1.48 2.21h1.32l-1.73-2.32c.81-.17 1.26-.72 1.26-1.56zm-2.16.91h-.31V8.03h.33c.67 0 1.03.28 1.03.82 0 .55-.36.85-1.05.85z" fill="#231F20"></path>
                    <path d="M20.16 12.86a2.931 2.931 0 100-5.862 2.931 2.931 0 000 5.862z" fill="url(#pi-paint0_linear)"></path>
                    <path opacity=".65" d="M20.16 12.86a2.931 2.931 0 100-5.862 2.931 2.931 0 000 5.862z" fill="url(#pi-paint1_linear)"></path>
                    <path d="M36.57 7.506c0-.1-.07-.15-.18-.15h-.16v.48h.12v-.19l.14.19h.14l-.16-.2c.06-.01.1-.06.1-.13zm-.2.07h-.02v-.13h.02c.06 0 .09.02.09.06 0 .05-.03.07-.09.07z" fill="#231F20"></path>
                    <path d="M36.41 7.176c-.23 0-.42.19-.42.42 0 .23.19.42.42.42.23 0 .42-.19.42-.42 0-.23-.19-.42-.42-.42zm0 .77c-.18 0-.34-.15-.34-.35 0-.19.15-.35.34-.35.18 0 .33.16.33.35 0 .19-.15.35-.33.35z" fill="#231F20"></path>
                    <path d="M37 12.984S27.09 19.873 8.976 23h26.023a2 2 0 002-1.984l.024-3.02L37 12.985z" fill="#F48120"></path>
                    <defs>
                        <linearGradient id="pi-paint0_linear" x1="21.657" y1="12.275" x2="19.632" y2="9.104" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#F89F20"></stop>
                            <stop offset=".25" stop-color="#F79A20"></stop>
                            <stop offset=".533" stop-color="#F68D20"></stop>
                            <stop offset=".62" stop-color="#F58720"></stop>
                            <stop offset=".723" stop-color="#F48120"></stop>
                            <stop offset="1" stop-color="#F37521"></stop>
                        </linearGradient>
                        <linearGradient id="pi-paint1_linear" x1="21.338" y1="12.232" x2="18.378" y2="6.446" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#F58720"></stop>
                            <stop offset=".359" stop-color="#E16F27"></stop>
                            <stop offset=".703" stop-color="#D4602C"></stop>
                            <stop offset=".982" stop-color="#D05B2E"></stop>
                        </linearGradient>
                    </defs>
                </svg>
            </div>
        </div>
    </footer>
    <script src="//code.tidio.co/uqdchknnebzppsl6akwqk2xrdwnbtm5i.js" async></script>
</body>

</html>