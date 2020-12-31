<?php
include("connection.php") ;
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
if($_SERVER["REQUEST_METHOD"] == "POST"){ 
if(isset($_GET['value_key'])){
  $var = $_GET['value_key'];

$sql = "DELETE FROM Questions WHERE id= $var";
$sql2 = "DELETE FROM Answers WHERE qid= $var";
if (mysqli_query($con, $sql) && mysqli_query($con, $sql2) ) {
  header("location: logged_in.php");
} 
else {
  echo "Error deleting record: " . mysqli_error($con);
}
}}
mysqli_close($con);
?>

?>