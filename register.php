<html>
  <head>
    <title>Cryptfolio - Register</title>
    <link rel="stylesheet" type="text/css" href="">
    <link rel="shortcut icon" type="image/jpg" href="ico/favicon.ico"/>
  </head>
  <?php 
    if(isset($_COOKIE['user']))
    {
      header("location: index.php");
    }

  ?>
  <body>  
      <div id="login-div">
    <form action="userprocess.php">
        Username : <input type="text" name="username">
        Password : <input type="password" name="password">
        <input type="submit" method="post"/>
  

    </form>
        </div>
      <?php echo "<p>Do you have an account? if so </p>" . "<a href='login.php'>" . "CLICK HERE" . "</a>" ?>
  </body>
</html>