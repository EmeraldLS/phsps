<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get started - PHSPS</title>
    <link rel="stylesheet" href="./asset/css/all.min.css">
    <link rel="icon" href="./asset/images/phsps.jpg">
    <link rel="stylesheet" href="./asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="./asset/css/footer.css">
    <link rel="stylesheet" href="./asset/css/get_started.css">
    <link rel="stylesheet" href="./asset/css/blackpreloader.css">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@300&display=swap" rel="stylesheet">

</head>
<body onload="fadeOut()">
    <div class="form__content">

    <?php include("blackpreloader.php") ?>
    <div class="content">
        <h1>Book your desired <br>Website/App</h1>
        <form method="post">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"  id="basic-addon1"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Your name" name="name" id="name">
              </div>
    
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" placeholder="Email" name="email" id="email">
              </div>
    
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone" ></i></span>
                </div>
                <input type="tel" class="form-control" placeholder="Phone No.(optional)" aria-label="phone" name="phone" id="phone">
              </div>
                
                <select name="" id="" class="form-control form-control-select">
                    <option value="1"selected disabled>Select One</option>
                    <option value="2">Blog</option>
                    <option value="3">Primary School</option>
                    <option value="4">Secondary School</option>
                    <option value="2">Point of sale</option>
                    <option value="2">Pharmacy</option>
                    <option value="2">Hospital</option>
                    <option value="2">Laboratory</option>
                    <option value="2">Church</option>
                    <option value="2">Online Store</option>
                    <option value="2">Artiste</option>
                    <option value="2">CBT. App</option>
                    <option value="2">Other?(Specify below)</option>
                </select>
    
    
    
              <div class="input-group my-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"><i class="fas fa-sticky-note"></i></span>
                </div>
                <textarea class="form-control"placeholder="Brief Description of app/website"></textarea>
              </div>
              <div class="started__buttons">
                <button class="button btn1" id="s-btn" type="submit">Book App</button>
                <a href="./" class="button btn2"><i class="fas fa-backward pr-1"></i>Back to home</a>
            </div>
        </form> 
    </div>
    </div>
  <?php include("footer.php") ?>

    <script src="./asset/js/jquery.js"></script>
    <script src="./asset/js/bootstrap.min.js"></script>
    <script src="./asset/js/all.min.js"></script>
    <script src="./asset/js/preloader.js"></script>
    <script src="./asset/js/get_started.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="./asset/js/fbnotification.js"></script>
</body>
</html>