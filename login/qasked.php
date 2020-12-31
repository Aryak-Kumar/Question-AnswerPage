<?php
include("connection.php") ;
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;}
 
if($_SERVER["REQUEST_METHOD"] == "POST"){

  $title = $_POST['title'];  
  $radio = $_POST['Space'];
  $content = $_POST['cont'];  
  $date  = date('Y-m-d');
  $id = $_SESSION['id'];
  $name = $_SESSION['name'];
  
  $insert = "INSERT INTO Questions (space, title, content ,time_add, creatorid, creatorName) VALUES ('$radio', '$title', '$content','$date', '$id','$name')";
  echo "$radio $title $content $date $id $name";
                if(mysqli_query($con, $insert)){
                  header("location: logged_in.php");
                }
                else{
                  echo "Error!";
                }
              }
              
?>