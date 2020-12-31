<?php
include("connection.php") ;
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
$name = $_SESSION["name"];
$id = $_SESSION["id"];
$qid = $_SESSION["Ques"];
$date = date("Y-m-d");
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $content = $_POST["conten"]; 
if(isset($_GET['value_key'])){
  $var = $_GET['value_key'];
                $insert = "INSERT INTO Answers (qid, content, uid ,uname, time) VALUES ('$var' ,'$content' ,'$id', '$name', '$date')";
                if(mysqli_query($con, $insert)){
                  header("location: answer2.php?value_key=".$var);
                  
                }
                else{
                  echo "Error!";
                }
}
}
?>