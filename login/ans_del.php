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

$sql = "SELECT * FROM Answers WHERE id=$var";
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_assoc($result)) {
    $r1= trim($row["qid"]);
  }
  $sql2 = "DELETE FROM Answers WHERE id= $var";
if (mysqli_query($con, $sql2) ) {
	
  header("location: answer2.php?value_key=".$r1);
} 
else {
  echo "Error deleting record: " . mysqli_error($con);
}

}}
mysqli_close($con);
?>
