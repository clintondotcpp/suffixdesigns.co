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
    <link rel="stylesheet" type="text/css" href="./css/emailsignup.css">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
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
    <div class="container">
        <section class="row mt-5 text-center">
            <div class="col-md-6 m-auto">
                <h1><span class="fas fa-newspaper fa-2x"></span></h1>
                <h1 clas="dispay-4">Newsletter Signup</h1>
                <p class="lead">
                    Enter your info for a chance to get a free animated sticker
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