<ul>
  <?php 
  if($_COOKIE['user'] != null){

  echo '<li><a href="deletecookie.php">Logout</a></li>';
  }
  ?>

  <li><a href="index.php">Crypto Values</a></li>
  <li><a href="portfolio.php">Portfolio</a></li>
  <li id = "welcome"><?php echo "Welcome " . ucfirst($_COOKIE['user'])  ?></li>
  </ul>