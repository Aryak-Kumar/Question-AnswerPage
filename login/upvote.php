<?php
include("connection.php") ;
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
$name = $_SESSION["name"];
$id = $_SESSION["id"];
if($_SERVER["REQUEST_METHOD"] == "POST"){
if(isset($_GET['value_key'])){
  $var = $_GET['value_key'];
}
if(isset($_GET['loc'])){
  $loc = $_GET['loc'];

}
$upv = mysqli_query($con, "SELECT * FROM QUpvotes WHERE qid = '$var'");
while($row2 = mysqli_fetch_array($upv)){
 if($id===$row2['uid'])
   $r=$row2['uid'];
  else 
    $r=null;
}
if($r!=null){
  if(mysqli_query($con, "DELETE FROM QUpvotes WHERE (uid='$r' AND qid='$var')")){
    if ($loc==='1')
  	header("location:logged_in.php");
  else
    header("location:answer2.php?value_key=".$var);
}
  else
  	echo "ERROR";
   }
  else{
  if(mysqli_query($con, "INSERT INTO QUpvotes (qid,uid) VALUES ('$var',$id)")){
  	if ($loc==='1')
    header("location:logged_in.php");
  else
    header("location:answer2.php?value_key=".$var);
}
  else
  	echo "ERROR";
}
}

?>
