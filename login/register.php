
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
if(isset($_GET['value_key'])){
  $var = $_GET['value_key'];
echo '<script>alert("'.$var.'")</script>';
}
?>
<div class="container" style="padding-top: 30px">
<form action="reg.php" method="post">
  <div class="imag">
    <img src="add.png" class="user" style="margin-top: 10px;">
  </div>

  <div class="cont">
    <div class="inp">
      <label for="name"><b>Name</b></label><br>
    <input id="name" type="text" placeholder="Enter Name" name="name" required>
  </div>
    <br>
    <div class="inp">
      <label for="email"><b>Email</b></label><br>
    <input id="email" type="text" placeholder="Enter Email" name="email" required>
  </div>
    <br>
<div class="inp">
    <label for="pwd"><b>Password</b></label><br>
    <input id="pwd" type="password" placeholder="Enter Password" name="pwd" required>
        </div><br>
        <div class="inp">
      <label for="pwd_con"><b>Confirm Password</b></label><br>
    <input id="pwd_con" type="password" placeholder="Re-enter Password" name="pwd_con" required>
  </div>
    <br>
        <button type="submit">Register</button> 
  </div>

  <div class="bottom">
    <a href="index.php"><button type="button" class="cancelbtn">Cancel</button></a>
    <a href="login.php" style="float: right;"><button type="button" class="cancelbtn">Login</button></a>
  </div>
</form>
</div>
</body>
</html>

