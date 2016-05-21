<!DOCTYPE html>
<html>
<head>
  <title>The Face Shop</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <meta charset="utf-8">
</head>
<body>
  <div class="container-fluid">
    <div class="header clearfix">
      <nav>  
        <a href="mainpage.php"><img src="new.png" style="margin-left:250px; margin-bottom:10px"></a>
        <ul class="nav nav-pills pull-right">
          <li role="presentation"><a href="sign.php" style="color:fuchsia">Log In</a></li>
          <li role="presentation"><a href="registration.php" style="color:fuchsia">Sign Up</a></li><br>
          <li role="presentation"><a href="#" style="color:fuchsia">My Bag <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
        </ul>
        <ul class="nav nav-pills pull-left">
          <li role="presentation"><a href="onas.php" style="color:fuchsia">About us</a></li>
        </ul>
      </nav>
    </div>
    <nav class="navbar navbar-default" style="background-color:hotpink">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="face.php" style="color:white">Face</a></li>
            <li><a href="body.php" style="color:white">Body</a></li>
            <li><a href="hands.php" style="color:white">Hands</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white">Brands<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="etude.php">Etude House</a></li>
                  <li><a href="nature.php">Nature Republic</a></li>
                  <li><a href="">The Face Shop</a></li>
                  <li><a href="tony.php">Tony Moly</a></li>
                </ul>
            </li>
            <li><a href="accessories.php" style="color:white">Accessories</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="row">  
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="width:500px; margin:auto">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="theface1.jpg" alt="">
          </div>
          <div class="item">
            <img src="theface2.jpg" alt="">
          </div>
          <div class="item">
            <img src="theface3.jpg" alt="">
          </div>
          <div class="item">
            <img src="theface4.png" alt="">
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="container">
      <div class="row featurette">
        <div class="col-md-6 col-md-push-4">
          <h2 class="featurette-heading" style="color:darkslategray; font-size:16px">Mirror The Face Shop <span class="text-muted">650tg</span></h2>
          <p class="lead">Convenient hand mirror plastic</p>
          <a class="btn btn-default" href="" role="button">Add to Bag</a>
        </div>
        <div class="col-md-4 col-md-pull-6">
          <img class="img-thumbnail" src="mirror.jpg" width="250px" height="250px" alt="Зеркало The Face Shop">
        </div>
      </div>
      <hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-6 col-md-push-4">
          <h2 class="featurette-heading" style="color:darkslategray; font-size:16px">Brush for applying masks The Face Shop <span class="text-muted">315tg</span></h2>
          <p class="lead">Quality brush with soft, fine, synthetic bristles. Promotes smooth and even application of funds</p>
          <a class="btn btn-default" href="" role="button">Add to Bag</a>
        </div>
        <div class="col-md-4 col-md-pull-6">
          <img class="img-thumbnail" src="brush.jpg" alt="Кисть для нанесения масок The Face Shop" width="250px" height="250px">
        </div>
      </div>
      <hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-6 col-md-push-4">
          <h2 class="featurette-heading" style="color:darkslategray; font-size:16px">Perfumed body lotion The Face Shop Perfume Seed <span class="text-muted">1950tg</span></h2>
          <p class="lead">Lotion with a creamy texture gives the skin moisture and softness, as well as retain a soft and persistent aroma</p>
          <a class="btn btn-default" href="" role="button">Add to Bag</a>
        </div>
        <div class="col-md-4 col-md-pull-6">
          <img class="img-thumbnail" src="perfumeseed.jpg" width="250px" height="250px" alt="The Face Shop Perfume Seed">
        </div>
      </div>
      <hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-6 col-md-push-4">
          <h2 class="featurette-heading" style="color:darkslategray; font-size:16px">Protective cream for hands The Face Shop Protect Me <span class="text-muted">850tg</span></h2>
          <p class="lead">The cream is based on organic ingredients will give You soft silky skin and strong nails. The nutritional effect of the cream is due to a combination of natural oils and extracts that ensure the skin elasticity and softness</p>
          <a class="btn btn-default" href="" role="button">Add to Bag</a>
        </div>
        <div class="col-md-4 col-md-pull-6">
          <img class="img-thumbnail" src="protectme.jpg" alt="The Face Shop Protect Me" width="250px" height="250px">
        </div>
      </div>
    </div>
  </div>
</body>
</html>