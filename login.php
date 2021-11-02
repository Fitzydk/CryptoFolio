<html>
  <head>
    <title>Cryptfolio - Login</title>
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
    <form action="">
        Username : <input type="text" name="username">
        Password : <input type="password" name="password">
        <input type="submit" method="post" />
  

    </form>
        </div>

        <?php

        $username = $_GET['username'];
        $password = $_GET['password'];
        
        $userlist = file ("cred/login.txt");
        $success = false;

        foreach ($userlist as $user) {
            $user_details = explode('|', $user);
            if($user_details[0] == $username && $user_details[1] == $password){
                $success = true;
                break;
        }
    }
        if($success){
            setcookie("user", $username, time() + (86400 * 30), "/");
            header("location: index.php");
        }
        else{
            if($username && $password != null){
              echo "<p>Your username or password may be wrong. Please try again</p>";
            }
        }
    ?>
  </body>
</html>