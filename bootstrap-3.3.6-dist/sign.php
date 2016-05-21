<!DOCTYPE html>
<html>
<head>
	<title>Welcome!</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<meta charset="utf-8">
</head>
<body>
  <a href="mainpage.php"><img src="new.png" style="margin-left:500px; margin-bottom:10px"></a>
  <div class="container">
    <form class="form-signin" style="width:350px; margin-left:390px" method="POST" action="login.php">
      <label for="inputEmail" class="sr-only">Email</label>
      <input type="email" id="email" class="form-control" placeholder="Email" required="" autofocus="" name="email">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="pass" class="form-control" placeholder="Пароль" required="" name="password">
      <input type="submit" value="Log In" class="btn-sign">
    </form>
  </div>
</body>
</html>
