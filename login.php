
<!doctype html>
<html lang="en">
  <head>
  	<title>Menu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
		<link rel="stylesheet" href="header.css">
        <link rel="stylesheet" href="regcss.css">
		 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		 		<style>
		 a {
    color: white;
    text-decoration: none;
}

a:hover 
{
     color:white; 
     text-decoration:none; 
     cursor:pointer;  
}
.back{
     background-image:url(imgs/wallp.jpg);
     height: 1080px;
}
.right{
  height: 350px;
}
.left{
  height: calc(70% - 50px);
}
.container{
  margin-top:135px;
}
</style>
  </head>
<body>

<nav>
	<a href="home.html">Home</a>
	<a href="attract.html">Attractions</a>
	<a href="hotel.html">Hotels</a>
	<a href="contact.html">About Us</a>
	<a href="sign.php">Sign In</a>
	<a href="login.php">Login</a>
	<a href="#">LOGO</a>
	<div class="animation start-home"></div>
</nav>



<div class="page">
  <div class="container">
    <div class="left">
      <div class="login">Login</div>
    </div>
    <div class="right">
      <div class="form" >
        <form action="auth.php" method="post">
        <label for="email">Email</label>
        <input type="text" name="email" placeholder="email" id="email" required>
        <label for="password">Password</label>
        <input type="text" name="password" placeholder="password" id="password" required>
        <input type="submit" id="submit" name = "submit" value="submit">
      </form>
      </div>
    </div>
  </div>
</div>

  <script src="js/main.js"></script>
</body>
</html>