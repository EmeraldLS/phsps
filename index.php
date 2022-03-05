<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./asset/images/phsps.jpg">
    <link rel="stylesheet" href="./asset/css/all.min.css">
    <link rel="stylesheet" href="./asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="./asset/css/style.css">
    <link rel="stylesheet" href="./asset/css/footer.css">
    <link rel="stylesheet" href="./asset/css/yellowpreloader.css">
    <link href="https://fonts.googleapis.com/css2?family=Sora&display=swap" rel="stylesheet">
    <title>PHSPS</title>
</head>

<body onload="fadeOut()">
    <?php
    include("./yellowpreloader.php")
    ?>

    <!-- <div class="preloader">
        <img class="loader" src="./asset/images/phsps.jpg"
        height="200" width="200">
    </div> -->

    <div class="top-line"></div>
    <nav class="navbar navbar-expand-sm">
        <div class="container">
            <div class="navbar-brand">
                <a href="./index.php"><img src="./asset/images/logo.png" alt="logo" width="150px"></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#exnav">
                <i class="fas fa-bars hamburger text-white"></i>
            </button>

            <div class="collapse navbar-collapse" id="exnav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="./members.php" class="nav-link">Us</a></li>
                    <li class="nav-item"><a href="./members.php" class="nav-link">Grow</a></li>
                    <div class="short-line"></div>
                </ul>
            </div>

        </div>
    </nav>

    <div class="intro">
        <h1 class="text-center">PHSPS makes life</h1>
        <h1 class="text-center">easy for <span> you </span></h1>
        <p class="text-center">From your comfort zone,<br> you can control your business with your <br>fingers</p>
        <a class="started" href="./get_started.php">Get Started</a>

        <div class="intro__img">
            <img src="./asset/images/undraw_winners_re_wr1l.svg" alt="">
            <img src="./asset/images/undraw_working_from_anywhere_re_9obt.svg" alt="">
        </div>
    </div>
    <div class="first__section" id="first__section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 first__column">
                    <div class="container">
                        <img src="./asset/images/undraw_startup_life_re_8ow9.svg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm-8 second__column">
                    <h2 class="phsps-h2">In an evolving world, <br> your buiness needs<br> an online presence</h2>
                    <p class="phsps-p">Every substainable that stands the test of time do so because they embrace innovation as early as possible.</p>
                </div>
            </div>
        </div>

    </div>


    <div class="second__section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 first__column">
                    <div class="container">
                        <img src="./asset/images/undraw_weather_notification_re_3pad.svg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm-8 second__column">
                    <h2 class="phsps-h2"> <span style="color: #FDE908;">Manage </span> your business<br>from anywhere<br>in the world</h2>
                    <p class="phsps-p">Our web apps are specially designed to help you monitor different braches of your business irrespective of their geographical locations. What's more interesting is that you can do this with your smartphone</p>
                </div>
            </div>
        </div>

    </div>


    <div class="third__section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 first__column">
                    <div class="container">
                        <img src="./asset/images/undraw_web_shopping_re_owap.svg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm-8 second__column">
                    <h2 class="phsps-h2">E-commerce just got <br>easier</h2>
                    <p class="phsps-p">For e-commerce businness, we have web apps that can hekp you run online sales easily and still retain customers data inorder to keep in touch with your customers which is a very vital part of sustaining long term relationships</p>
                </div>
            </div>
        </div>

    </div>


    <div class="fourth__section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 first__column">
                    <div class="container">
                        <img src="./asset/images/undraw_wallet_aym5.svg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm-8 second__column">
                    <h2 class="phsps-h2">There's extra cash <br>for <span style="color: #FDE908;">you</span>.</h2>
                    <p class="phsps-p">Need extra cash?Sure you do. <br>Become a PHSPS marketer and earn <br> as muchas you can on every sale. <br>You grow, we grow! <br>Let's go! <br> Send a mail to <a href="email:info@phsps.com" style="color: #FDE908;">info@phsps.com</a> with a single click, to <br> get started.</p>
                </div>
            </div>
        </div>

    </div>

    <div id="contactForm">
        <div class="col-one">
            <img src="./asset/images/undraw_connection_re_lcud.svg" alt="" class="contact-img" height="250">
        </div>
        <div class="col-two">
            <form method="post" action="index.php">
                <h3 style="color:#211f24">You have something to say?</h3>
                <div>
                    <label for="name">FULL NAME</label>
                    <input type="text" class="form-control" placeholder="Enter your full name" name="name" id="name">
                </div>

                <div>
                    <label for="email">EMAIL</label>
                    <input type="email" class="form-control" placeholder="Enter your email address" name="email" id="email">
                </div>

                <div>
                    <label for="reason">Reason of contact</label>
                    <textarea id="reason" name="reason" class="form-control" placeholder="Reason of contact"></textarea>
                </div>
                <div>
                    <button type="submit" class="btn">Send Now!</button>
                </div>
            </form>
        </div>
    </div>

    <div class="fifth__section">
        <div class="container d-flex justify-content-center">
            <h3 class="text-anim"></h3>
        </div>
    </div>

    <div class="whatwedo" id="whatwedo">
        <div class="content">
            <div class="first__row">
                <div style="display: flex;flex-direction:column;position:relative">
                    <h4 style="color: rgba(33, 31, 36, 1);">Branding</h4>
                    <br>
                    <img class="first__column box" src="./asset/images/digital-marketing.png">
                    <div class="detail">
                        <ul>
                            <li>Content Writing</li>
                            <li>Logo Design</li>
                            <li>Graphics Design</li>
                        </ul>
                    </div>
                </div>
                <div style="display: flex;flex-direction:column;position:relative;">
                    <h4 style="color: rgba(33, 31, 36, 1);">UI/UX Design</h4>
                    <br>
                    <img class="second__column box" src="./asset/images/web-browser.png">
                    <div class="detail">
                        <ul>
                            <li>User Research</li>
                            <li>Analysis</li>
                            <li>Ideation</li>
                            <li>Prototyping</li>
                            <li>Testing</li>
                        </ul>
                    </div>
                </div>
                <div style="display: flex;flex-direction:column;position:relative">
                    <h4 style="color: rgba(33, 31, 36, 1);">Web Design & <br> Development</h4>
                    <img class="third__column box" src="./asset/images/internet.png">
                    <div class="detail">
                        <ul>
                            <li>Prototype Development</li>
                            <li>Front-end Design</li>
                            <li>Web animation</li>
                            <li>Responsive Testing</li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="second__row">
                <div style="display: flex;flex-direction:column;position:relative">
                    <h4 style="color: rgba(33, 31, 36, 1);">Enterprise <br> Software</h4>
                    <img class="first__column box" src="./asset/images/bank.png">
                    <div class="detail">
                        <ul>
                            <li>Enterprise Software</li>
                            <li>Application for firms</li>

                        </ul>
                    </div>
                </div>
                <div style="display: flex;flex-direction:column;position:relative">
                    <h4 style="color: rgba(33, 31, 36, 1);">Mobile <br> Development</h4>
                    <img class="second__column box" src="./asset/images/digital-marketing.png">
                    <div class="detail">
                        <ul>
                            <li>Android</li>
                            <li>IOS</li>

                        </ul>
                    </div>
                </div>
                <div style="display: flex;flex-direction:column;">
                    <h4 style="color: rgba(33, 31, 36, 1);">Photography & <br>Cinematography </h4>
                    <img class="third__column box" src="./asset/images/movies-app.png">
                    <div class="detail">
                        <ul>
                            <li>Video Content production</li>
                            <li>High-end advert videos</li>
                            <li>Campaign pictures</li>
                            <li>Product Shoot</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="" style="background-color: #fff;padding-top:30px">
        <h4 class="text-center" style="margin-bottom: -50px;font-weight:600">Some of our clients</h4>
        <div class="client">

            <div>
                <div class="client-image">
                    <img src="./asset/images/powerec.png" alt="">
                </div>
                <a href="https://powerecng.com" target="_blank">Powerecng<br>Global Services</a>
            </div>
            <div>
                <div class="client-image">
                    <img src="./asset/images/" alt="">
                </div>
                <a href="https://goodnessmed.com" target="_blank">Goodness Medical<br>Company Limiited</a>
            </div>
            <div>
                <div class="client-image">
                    <img src="./asset/images/fidossi.png" alt="">
                </div>
                <a href="https://fidossi.com" target="_blank">Fidossi Wines &<br>Spirit </a>
            </div>
            <div>
                <div class="client-image">
                    <img src="./asset/images/cornerstone.png" alt="">
                </div>
                <a href="https://mycornerstonemed.com" target="_blank">Cornerstone Medical <br>Company Limited</a>
            </div>
            <div>
                <div class="client-image">
                    <img src="./asset/images/lissapearls.png" alt="">
                </div>
                <a href="https://lissapearls.com" target="_blank">Lissa Pearls <br>College</a>
            </div>
            <div>
                <div class="client-image">
                    <img src="./asset/images/careerbuilders.png" alt="">
                </div>
                <a href="https://careerbuildersacademy.org" target="_blank">Career Builders <br>Academy</a>
            </div>
        </div>
    </div>

    <?php include("footer.php") ?>


    <script src="./asset/js/jquery.js"></script>
    <script src="./asset/js/bootstrap.min.js"></script>
    <script src="./asset/js/all.min.js"></script>
    <script src="./asset/js/main.js"></script>
    <script src="./asset/js/preloader.js"></script>
    <script src="./asset/js/observers.js"></script>
    <script src="./asset/js/twitternotification.js"></script>
</body>

</html>