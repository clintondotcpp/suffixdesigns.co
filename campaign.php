<!--<link rel="stylesheet" href="./css/index.css?v=<?php echo time(); ?>">-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome!</title>
    <link rel="shortcut icon" type="image/jpg" href="Assets/favicon.jpg">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
    <script src="https://js.stripe.com/v3/"></script>
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
            <a class="navbar-brand" href="index.php"><img src="Assets/suffixlogo.PNG" alt="" width="100" height="100"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
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

    <div class="container py-5 my-5 text-center">
        <div class="pt-5 mt-5">
            <img src="https://www.suffixdesigns.co/suffix-designs-gifs/1.gif" alt="gif" width="100" height="100">
        </div>
        <div>
            <h1>Custom illustrations for real estate professionals</h1>
            <h4>Over 200 templates to choose from.</h4>
            <a href="" class="btn btn-primary btn-lg active">Shop Templates</a>
        </div>
    </div>
    <section id="why">
        <div class="container why">
            <h2>Why you should order from us!</h2>
            <ul>
                <li>Satisfaction guaranteed: We provide unlimited revisions on all orders.</li>
                <li>Completely customizable</li>
                <li>We give 5 FREE custom animated stickers/GIFs on all orders.</li>
                <li>We send you 5 variations of your illustrations e.g "sold","coming soon","closed","pending" etc for your posts and stories.</li>
                <li>We send you another 5 like the above but no background</li>
                <li>100% hand drawn</li>
            </ul>
        </div>
    </section>
    <style>
        body {
            background-image: linear-gradient(-90deg, #e0f5d9, white);
        }
    </style>

    <div class="container mt-5 mb-5">

        <div class="row g-2">
            <h2 class="text-center">Testimonials</h2>
            <div class="col-md-4">
                <div class="card p-3 text-center px-4">

                    <div class="user-image">

                        <img src="https://i.imgur.com/PKHvlRS.jpg" class="rounded-circle" width="80">

                    </div>

                    <div class="user-content">

                        <h5 class="mb-0">Bruce Hardy</h5>
                        <span>Software Developer</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                    </div>

                    <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>

                    </div>

                </div>
            </div>

            <div class="col-md-4">

                <div class="card p-3 text-center px-4">

                    <div class="user-image">

                        <img src="https://i.imgur.com/w2CKRB9.jpg" class="rounded-circle" width="80">

                    </div>

                    <div class="user-content">

                        <h5 class="mb-0">Mark Smith</h5>
                        <span>Web Developer</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

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

                <div class="card p-3 text-center px-4">

                    <div class="user-image">

                        <img src="https://i.imgur.com/ACeArwY.jpg" class="rounded-circle" width="80">

                    </div>

                    <div class="user-content">

                        <h5 class="mb-0">Veera Duncan</h5>
                        <span>Software Architect</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                    </div>

                    <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card p-3 text-center px-4">

                    <div class="user-image">

                        <img src="https://i.imgur.com/ACeArwY.jpg" class="rounded-circle" width="80">

                    </div>

                    <div class="user-content">

                        <h5 class="mb-0">Veera Duncan</h5>
                        <span>Software Architect</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                    </div>

                    <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>

                    </div>

                </div>

            </div>
            <div class="col-md-4">

                <div class="card p-3 text-center px-4">

                    <div class="user-image">

                        <img src="https://i.imgur.com/ACeArwY.jpg" class="rounded-circle" width="80">

                    </div>

                    <div class="user-content">

                        <h5 class="mb-0">Veera Duncan</h5>
                        <span>Software Architect</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                    </div>

                    <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>

                    </div>

                </div>

            </div>
            <div class="col-md-4">

                <div class="card p-3 text-center px-4">

                    <div class="user-image">

                        <img src="https://i.imgur.com/ACeArwY.jpg" class="rounded-circle" width="80">

                    </div>

                    <div class="user-content">

                        <h5 class="mb-0">Veera Duncan</h5>
                        <span>Software Architect</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                    </div>

                    <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>

                    </div>

                </div>

            </div>


        </div>

    </div>

    <div class="container">
        <h2 class="text-center">Frequently Asked Questions</h2>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Accordion Item #1
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Accordion Item #2
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Accordion Item #3
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section id="clients">
        <div class="container text-center mb-4">
            <p class="fw-bold">Our clients</p>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- Start of HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js-eu1.hs-scripts.com/25754945.js"></script>
    <!-- End of HubSpot Embed Code -->
</body>

</html>