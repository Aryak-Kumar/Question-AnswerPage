<?php
include("connection.php") ;
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;}

    if(isset($_GET['value_key'])){
  $var = $_GET['value_key'];
}
 
if($_SERVER["REQUEST_METHOD"] == "POST"){

  $title = $_POST['title'];  
  $radio = $_POST['Space'];
  $content = $_POST['cont'];  
  
  $sql = "UPDATE Questions SET 
    space='$radio',
    title = '$title',
    content = '$content'
    WHERE id = $var";

if (mysqli_query($con, $sql)) {
  header("location: answer2.php?value_key=".$var);
} else {
  echo "Error updating record: " . mysqli_error($con);
}
}
mysqli_close($con);
?>