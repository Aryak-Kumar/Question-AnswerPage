<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
  body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color: #AED6F1;
  display: flex;
  flex-direction: column;
}
form {
background: #2f2fa2;
width: 500px;}

input {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  font-size: 15px;
  color: white;
  background-color: #2f2fa2;
  display: inline-block;
  border:none;
  border-bottom: 2px solid white;
  box-sizing: border-box;
}

button {
  background-color: #2f2fa2;
  color: #F64C72;
  font-size: 17px;
  padding: 14px 20px;
  margin: 8px 0;
  border: 2PX solid #F64C72;
  cursor: pointer;
  width: 30%;
}

.cont button:hover{
   background-color: #F64C72;
  color: #2f2fa2;
  transform: scale(1.1);
}
.bottom button:hover{
   background-color: #553D67;
  color: #99738E;
  transform: scale(1.1);
}
label{
  float: left;
}

.container{
  vertical-align: center; 
  padding: 16px;
  margin: auto;
  color: white;

}
.bottom {
  vertical-align: center; 
  padding: 16px;
  background: #99738E ;
  margin: auto;
}
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  font-size: 15px;
  background-color: #99738E;
  color: #553D67;
  border:2PX solid #553D67; 
}
.cont{
  text-align: center;
  align-content: center;
  padding: 20px;
}
.imag {
  text-align: center;
  margin: 24px 0 12px 0;
}
.user {
  height: 70px;
  margin: 10px;
  align-items: center;
}


</style>
</head>
<body>

  <?php  
$con=mysqli_connect("localhost","root","","Project");
if(isset($_GET['value_key'])){
  $var = $_GET['value_key'];
}
$result = mysqli_query($con,"SELECT * FROM Questions where id =$var");

$row = mysqli_fetch_array($result);

echo"
<div class='container'>
<form action='qupdate.php?value_key=".$var."' method='post'>
  <div class='imag'>
    <img src='question.png' class='user'>
  </div>
<h1 align='center'>Edit Question</h1>
  <div class='cont'>
    <div class='inp'>
      <label for='title'><b>Title</b></label><br>
    <input id='tit' value='".$row['title']."' type='text' placeholder='Title' name='title' required>
  </div>
  <br>
  <div >
    <label><b>Space</b></label><br>
  <input type='radio' id='Algorithm' name='Space' value='Algorithm'>
  <label for='male'>Algorithm</label>
  <input type='radio' id='ML' name='Space' value='Machine Learning'>
  <label for='female'>Machine Learning</label>
  <input type='radio' id='System' name='Space' value='System'>
  <label for='other'>System</label>
  <input type='radio' id='JavaScript' name='Space' value='JavaScript'>
  <label for='other'>JavaScript</label>
  </div>
    
    <br><br>
<div class='inp'>
    <label><b>Content</b></label><br>
    <textarea name='cont' rows='4' style='width: 100%; font-size: 12px;' required>".$row['content']."</textarea>
        </div><br>
        <button type='submit'>Submit</button> 
  </div>

  <div class='bottom' align='center'>
    <a href='logged_in.php'><button type='button' class='cancelbtn'>Cancel</button></a>
  </div>
</form>
</div>";

?>
</body>
</html>

