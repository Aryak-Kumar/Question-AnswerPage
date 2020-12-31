
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Login</title>
</head>
<body>
 <?php
if(isset($_GET['value_key'])){
  $var = $_GET['value_key'];
echo '<script>alert("'.$var.'")</script>';
}
?>
<div class="container">
<form name="f1" action = "authentication.php" method = "POST">
  <div class="imag">
    <img src="user.png" class="user">
  </div>

  <div class="cont">
    <div class="inp">
      <label for="email"><b>Email</b></label><br>
    <input type="text" id="email" placeholder="Enter Email" name="email" required>
  </div>
    
    <br>
<div class="inp">
    <label for="pwd"><b>Password</b></label><br>
    <input type="password" id="pwd" placeholder="Enter Password" name="pwd" required>
        </div><br>
        <button type="submit">Login</button> 
  </div>

  <div class="bottom">
    <a href="index.php"><button type="button" class="cancelbtn">Cancel</button></a>
    <a href="register.php" style="float: right;"><button type="button" class="cancelbtn">Register</button></a>
  </div>
</form>
</div>

</body>
</html>

