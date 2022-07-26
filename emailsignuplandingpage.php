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
    <title>Suffix Designs Email Signup</title>
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/9c58ab43d1.js" crossorigin="anonymous"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="./script.js" defer></script>
     <!-- Meta Pixel Code -->
     <script>
        ! function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
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
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=398201842366874&ev=PageView&noscript=1" /></noscript>
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
   
    <div class="container">
        <section class="row mt-5 text-center">
            <div class="col-md-6 m-auto">
                <h1><span class="fas fa-newspaper fa-2x"></span></h1>
                <h1 clas="dispay-4">Newsletter Signup</h1>
                <p class="lead">
                    Enter your info for a chance to get a free custom animated sticker/GIF for your business
                </p>
                <form action="./leadgeneration.php" method="POST">
                    <div class="form-group">
                        <input type="text" 
                        name="first_name"
                        id="first-name"
                        class="form-control"
                        placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <input type="text" 
                        name="last_name"
                        id="last-name"
                        class="form-control"
                        placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <input type="email" 
                        name="email"
                        id="email"
                        class="form-control"
                        placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" 
                        name="profession"
                        id="profession"
                        class="form-control"
                        placeholder="What do you for a living (Optional)">
                    </div>
                    <p class="lead"><small>we need your profession to send emails tailored to you</small></p>
                    <button type="submit" class="btn btn-primary btn-block">
                        Sign Up
                    </button>
                </form>
            </div>
    </section>
    </div>
    
</body>
</html>