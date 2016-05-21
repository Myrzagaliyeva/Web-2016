<!DOCTYPE html>
<html>
<head>
  <title>Sign up the Be Perfect</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <meta charset="utf-8">
</head>
<body>
  <a href="mainpage.php"><img src="new.png" style="margin-left:500px;"></a>
  <div class="container" style="width:350px;">
      <h2 class="form-signin-heading" style="margin-left:55px">Fill in the gaps</h2>
      <form method="POST" action="register.php">
      <label for="inputName" class="sr-only">Name</label>
      <input type="name" id="name" class="form-control" placeholder="Name" required="" autofocus="" name="name">
      <label for="inputSurname" class="sr-only">Surname</label>
      <input type="surname" id="surname" class="form-control" placeholder="Surname" required="" autofocus="" name="surname">
      <label for="inputEmail" class="sr-only">Email</label>
      <input type="email" id="email" class="form-control" placeholder="Email" required="" autofocus="" name="email">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="pass" class="form-control" placeholder="Password" required="" name="password">
      <br>
      <div class="error"></div>
      <input type="submit" name="submit" value="Sign Up" class="btn-sign">
    </form>
  </div>
</body>
</html>  