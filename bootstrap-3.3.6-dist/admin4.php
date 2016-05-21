<?php  
  session_start();
  require_once("connection.php");
  $query = "SELECT * FROM goods";
  $res = $con->query($query)
?>
<!DOCTYPE html>
<html>
<head>
  <title>All for face</title>
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
        <a href="admin.php"><img src="new.png" style="margin-left:350px; margin-bottom:10px"></a>
        <ul class="nav nav-pills pull-right">
          <li role="presentation"><a href="mainpage.php" style="color:fuchsia">Log Out</a></li>
          <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" style="background:fuchsia; border:fuchsia">ADD NEW PRODUCT</button>
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
            <li><a href="" style="color:white">Face</a></li>
            <li><a href="admin2.php" style="color:white">Body</a></li>
            <li><a href="admin5.php" style="color:white">Hands</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white">Brands<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="admin3.php">Etude House</a></li>
                  <li><a href="admin6.php">Nature Republic</a></li>
                  <li><a href="admin7.php">The Face Shop</a></li>
                  <li><a href="admin8.php">Tony Moly</a></li>
                </ul>
            </li>
            <li><a href="admin1.php" style="color:white">Accessories</a></li>
          </ul>
        </div>
      </div>
    </nav>
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Add new product</h4>
        </div>
        <div class="modal-body">
          <form method="POST" action="add.php" enctype="multipart/form-data">
            Good's name: <label for="inputName" class="sr-only"></label>
            <input type="name" id="inputName" class="form-control" placeholder="Enter good's name" required="" autofocus="">
            Brand: <div class="dropdown">
            <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            List of brands
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dLabel">
              <li><a href="">Etude House</a></li>
              <li><a href="">Nature Republic</a></li>
              <li><a href="">The Face Shop</a></li>
              <li><a href="">Tony Moly</a></li>
            </ul>
        </div>
        Price <label for="inputPrice" class="sr-only"></label>
        <input type="price" id="inputPrice" class="form-control" placeholder="Good's price" required="" autofocus="">
        Description <label for="inputDescription" class="sr-only"></label>
        <input type="description" id="inputDescription" class="form-control" placeholder="Description" required="" autofocus="">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary" style="background:fuchsia; border:fuchsia">Save</button>
        </div>
    </div>
  </div>
</div>
    <div class="container">
        <div class="row featurette">
          <?php 
        session_start();
          include('connection.php');
          $query = "SELECT * from goods";
    if ($result=$con->query($query)){
    if(mysqli_num_rows($result)>0){
      $data = $result->fetch_array();
      $_SESSION['ID'] = $data['ID'];
      $_SESSION['good_name'] = $data['good_name'];
      $_SESSION['brand'] = $data['brand'];
      $_SESSION['good_price'] = $data['good_price'];
      $_SESSION['good_desc'] = $data['good_desc'];
      $_SESSION['good_img'] = $data['good_img'];
      do { echo '<div class="col-md-6 col-md-push-4">
            <h2 class="featurette-heading" style="color:darkslategray; font-size:16px">'.$data["good_name"].' '.$data["brand"].'<span class="text-muted">'.' '.$data["good_price"].'</span></h2>
            <p class="lead">'.$data["good_desc"].'</p>
            <a class="btn btn-default" href="delete.php?id='.$data["ID"].'" role="button">Delete</a>
          </div>
          <div class="col-md-4 col-md-pull-6">
            <img class="img-thumbnail" src="'.$data["good_img"].'" width="250px" height="250px" alt="">
          </div>
        </div>
        <hr class="featurette-divider">
      ';  
      } while ($data=$result->fetch_array());  
    }else header("Location:../error.php");
  }else {
    echo $con->error;
  }
           ?> 
    </div>
  </div>
</body>
</html>