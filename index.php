<html>
  <head>
    <title>Cryptfolio - Values</title>
    
  <link rel="shortcut icon" type="image/jpg" href="ico/favicon.ico"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>

<style>

input[type=submit] {
    background-color: #A239CA;;
    border-radius: 30px;
    border: hidden;
    color: white;
    padding: 20px 20px;
    margin: 20px 20px;
    cursor: pointer;
 }

 input[type=button] {
    background-color: #A239CA;;
    border-radius: 30px;
    border: hidden;
    color: white;
    padding: 20px 20px;
    margin: 20px 20px;
    cursor: pointer;
 }

 .form-group{
   text-align: center;
 }

 .select{
   margin-top: 2%;
   margin-right: 40%;
   margin-left: 40%;
 }

 #amount{
   margin-top: 10%;
 }

#bigbutton{
    position:absolute;
    top:0px;
    left:0;
    background: transparent;
    border: none !important;
    width:1%;
    height:1%;
    color:white;

}

#addcry{
  margin-right: 30%;
  margin-left: 31.5%;
  text-align: center;

}

#finished{
    background: #286831;
}

#viewwholebtn{
  text-align: center;
  margin-top: 10%;
}

</style>

  <body> 
  <?php include("includes/navbar.php") ?>

  <div id="amount">
    <?php include("default.php")?>
    <?php if($_COOKIE['user'] == null){
      header("location: register.php");
    }
    ?>

  </div>

  <script>

    function myfunc() {
      window.location.href = 'index.php';
      return false;
    }

    function showfile(){
      window.location.href = 'viewwholelist.php';
    }

</script>

<!--<div id="viewwholebtn">
<form>
  <input type="button" name="viewwhole" id="finished" value="View Whole Pref List" onclick="showfile()">
</form>
  </div>-->

<div class="form-group">
  <div class="select">
      <form action="#" method="post">
        <select name="coins[]" class="form-control" data-role="select-dropdown">  
        <option value="Select" selected="selected">Select</option>
        <?php include("addcrypto.php");?>
        </select>
        <input type="submit" name="coinlist" id="submitcoin">
      </form>
    </div>
  </div>

  <div id="addcry">
  <form>

        <input type="text" name="addcrypt" id="yourmum">
        <input type="submit" name="addcrypt1" id="yourmum" value="Add To Crypto-list">
    </form>
    <form>
    <?php include("removecrypto.php") ?>
    <input type="submit" name="removing" id="yourmum" value="Currency to remove">
    <input type="text" name="coinremove" id="yourmum">
  </form>
  </div>

  <input type="button" value="" onclick="myfunc()" id="bigbutton">

  </body>
</html>