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
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color: #AED6F1;
}

.topnav {
  overflow: hidden;
  background-color: #2f2fa2;
  justify-content: center;
  align-items: center;
}
.answ label{
  font-size: 30px; margin-top: 45px; color: #d1d1e0; cursor: pointer;
}
.ans-content{
  margin: 5px; font-size: 17px;
}
.answ{
  margin: 20px;
  margin-right: 50px; 
  float: right; 
  min-height: 100px;
  width: 70%; 
  background-color: #e6f2ff; 
  color: black;
  display: flex;
  box-shadow: 3px 5px 2px grey;
  border-radius: 10px;
}
.show-more{
  width:100px;
  background-color: #242582;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  margin: 5px;
  font-size: 15px;
}
.delq{
  width:100px;
  background-color: #242582;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  float: right;
  margin: 10px;
  font-size: 15px;
}
.editq{
  width:100px;
  background-color: #242582;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  float: right;
  margin: 10px;
  font-size: 15px;
}
.topnav a {
  float: left;
  color: black;
  text-align: center;
  text-decoration: none;
  font-size: 17px;
}
.conten{
  margin: 5px; font-size: 17px;
}
.space-button{
  background-color: #2f2fa2;
  color: #F64C72;
  font-size: 17px;
  padding: 14px 20px;
  margin: 8px 0;
  border: 2PX solid #F64C72;
  cursor: default;
border-radius: 10px; background-color:#e6f2ff; margin: 10px; color: #242582; border-color: #242582; width: 150px;
}
.topnav input[type=text] { padding: 6px; margin-top: 8px; font-size: 10px; width: 70px}
.search-btn {
  height: 15px;
}
.name-button{
background-color: #2f2fa2;
  color: #F64C72;
  font-size: 17px;
  padding: 14px 20px;
  margin: 8px 0;
  border: 2PX solid #F64C72;
  cursor: pointer;
  background-color:#F64C72; margin: 10px; color: #242582; border:none; cursor: default;
}

.topnav .search-container {
  float: right;
  margin-top: 20px;
}
.upvotes-button{
  background-color: #b3d9ff; border: none; width: 50px; margin-top: 70px;
}
.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  color: white;
  border-bottom: 2px solid white;
  background-color: #2f2fa2;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #2f2fa2;
  font-size: 17px;
  border: none;
  cursor: pointer;
}
.ans-name{
  color: #F64C72; font-size: 20px;
}
.topnav .search-container button:hover {
  background: #F64C72;
  transform: scale(1.1);
}
.log {
  background-color: #2f2fa2;
  color: #F64C72;
  font-size: 17px;
  padding: 14px 20px;
  margin: 8px 0;
  border: 2PX solid #F64C72;
  cursor: pointer;
}
.topnav button:hover{
   background-color: #F64C72;
  color: #2f2fa2;
  transform: scale(1.1);
}
.space-ar{
display: flex;
  justify-content:flex-end; 
}
.sort_con{
  background-color: #553d67;
  width: 30%;
  border-radius: 10px;
  height: 55px;
  overflow: auto;
  display: flex;
  justify-content:space-around;
}
 .sort_con button:hover{
  transform: scale(1.1);
  cursor: pointer;
}
.ques{
  margin: 20px;
  margin-left: 50px; 
  float: left; 
  min-height: 200px;
  width: 90%; 
  background-color: #e6f2ff; 
  color: black;
  display: flex;
  box-shadow: 3px 5px 2px grey;
  border-radius: 10px;

}
.ans{
  margin: 20px;
  margin-left: 100px; 
  float: left; 
  min-height: 100px;
  width: 90%; 
  background-color: #e6f2ff; 
  color: black;
  box-shadow: 3px 5px 2px grey;
  border-radius: 10px;
}

.no-up{
  content: url("up-no.png");
}
.up{
  content: url("up.png");
}
.space a:hover{
  transform: scale(1.1);
}


.back{
  background-color: #553d67;
  color: #F64C72;
  border: none; margin: 20px; width: 100px; height: 50px; font-size: 17px;
}
.back:hover{
  background-color: #F64C72;
  color: #553d67;
  transform: scale(1.1);
}

@media (min-width: 375px) { body {font-size:0.5rem;} } 
@media (min-width: 640px) { body {font-size:1rem;} } 
@media (min-width:960px) { body {font-size:1.1rem;} } 
@media (min-width:1100px) { body {font-size:1.2rem;} } 


@media screen and (max-width: 1137px) {
    #primary { width:67%; }
    #secondary { width:30%; margin-left:3%;} 
       .space {
  vertical-align: center;
  max-height:200px;
   }
   .space button{font-size: 1rem} 
   .cent{
    justify-content: center; align-items: center; margin:5px;display: flex; flex-direction: column;
   }
}
@media screen and (max-width: 750px) {
@media screen and (max-width: 750px) {
  .topnav input[type=text] { padding: 6px; margin-top: 8px; font-size: 10px; width: 70px}
  .search-btn {
  height: 15px;
}
   .space {
  vertical-align: center;
  max-height:200px;
  justify-content: center; align-items: center; margin: auto; display: flex; flex-direction: column;
   }
   .cent{
    justify-content: center; align-items: center; margin:5px;display: flex; flex-direction: column;
   }
   .space button{font-size: 1rem}
   .sort_con img{height: 35px;width: 35px} 
   .upvotes-bar{width: 30px; }
.upvotes-button{ width: 30px; margin-top: 50px;}
.upvotes-button img{ width: 25px }
.space-button{width: 60px; height: 30px; font-size: 10px;  padding: 5px; margin: 8px;}
.name-button{width: 60px; height: 30px; font-size: 10px;  padding: 5px; margin: 8px;}
.conten{ font-size: 1.2em; }
.ques{ margin-right: 10px; width: 90% ; margin:10px;}
.show_ans img{ height: 30px; width: 30px;}
.show-more{width: 50px; font-size: 6.5px}
.delq{width: 50px; font-size: 6.5px}
.editq{width: 50px; font-size: 6.5px}
.ans-name{font-size: 15px;}
.ans-content{font-size: 1em;}
.answ{margin: 10px; margin-right: 20px; min-height: 50px; width: 80%; }
.log{font-size: 10px;
  padding: 10px 14px;
  margin: 8px 0;}
  .askqu{
    min-height: 50px
  }
  .askqu label{
  font-size: 20px; margin-top: 15px;
}
.askqu h3{
  font-size: 20px;
}
.answ label{
  font-size: 20px; margin-top: 15px;
}
.answ h3{
  font-size: 20px;
}
.back{
  width: 50px; height: 25px; font-size: 12px;
}

}
</style>
</head>
<body>

<div class="topnav" id='top'>
  <a class="logo" href="index.php"><img width="100px" src="logo.png"></a>
  <div class="space-ar">
  <div class="search-container">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <input type="text" placeholder="Search..." name="search">
      <button type="submit"><img class='search-btn'src="search.png"></button>
    </form>
  </div>&nbsp;&nbsp;
  <a href="logout.php" ><button class="log">Log Out</button></a> &nbsp;&nbsp;
</div>
</div>

<br><a  href="logged_in.php"><button class="back" >Back</button></a>
    

<br>


<?php  
$con=mysqli_connect("localhost","root","","Project");
if(isset($_GET['value_key'])){
  $var = $_GET['value_key'];
}
$result = mysqli_query($con,"SELECT * FROM Questions where id =$var");

while($row = mysqli_fetch_array($result))
{

echo "<div class='ques' >
  <div style='min-height: 200px; width: 50px; background-color: #b3d9ff;'>

<form method='post' action=upvote.php?value_key=".$var."&loc=2><button type='submit' name='co_up' value = 'upvote1' class='upvotes-button' >
    <img width='40px' id='upvote' class='upvotes no-up'></button> </form>";


$upvotes = mysqli_query($con,"SELECT * FROM QUpvotes where qid=$var");
    if($upvotes){
    $c=0;
    while($row2 = mysqli_fetch_array($upvotes)){
    $c++;
}
mysqli_query($con,"UPDATE Questions SET upvotes=$c WHERE id=$var");

}

   echo "<p id='upvotes' style='vertical-align: center; text-align: center;'> <b>".$c."</b> </p>";

$upvotes = mysqli_query($con,"SELECT * FROM QUpvotes where qid=$var");
    while($row2 = mysqli_fetch_array($upvotes)){
    if($_SESSION['id']===$row2['uid']){

      echo "<script>document.getElementsByClassName('upvotes')[0].className = 'upvotes up';
      </script>"; 
    }
}

    echo"
  </div><div style=' display: flex; flex-direction: column;'>
    <button class='space-button'><a style='color: #242582; text-decoration: none;' href='#' >".$row['space']."</a></button>
 <button class='name-button' style=' background-color:#F64C72; margin: 10px; color: #242582; border:none; cursor: default;'>".$row['creatorName']."</button>
 <p style='text-align: center; color: #1a8cff'>10-10-2020</p>
  </div>
 <div style=' display: flex; flex-direction: column;'>
  <h1 style='margin: 20px;'>".$row['title']."</h1>
  <p class='conten'>".$row['content']."</p>";
  if($row['creatorid']===$_SESSION['id'])
  echo"<form action='qes_del.php?value_key=".$var."' method='post'><button type='submit' id='delete' class='delq'>Delete</button></form>
<form action='editq.php?value_key=".$var."' method='post'><button id='edit' class='editq'>Edit</button></form>";
 echo"</div>
</div>";


$result = mysqli_query($con,"SELECT * FROM Answers where qid =$var");
while($row = mysqli_fetch_array($result))
{

echo" <div class='answ' >";
if($row['uid']=== $_SESSION['id'])
  echo"<form action='ans_del.php?value_key=".$row['id']."' method='post'><button id='delete' class='show-more' style='float: right'>Delete</button></form>";


 echo"<div style=' display: flex; flex-direction: column;'>
  <div style=' display: flex; flex-direction: row; margin: 5px;'><h2 class='ans-name' id='answerer'>".$row['uname']."</h2>&nbsp;&nbsp;&nbsp;&nbsp;<p style='color: #1a8cff' id='ans_date'>".$row['time']."</p></div>

  <p class='ans-content'>".$row['content']."</p>
 </div>
</div>";}
}

echo'<a href="answer.php?value_key='.$var.'" style="text-decoration: none;">
<div class="answ" ><h2 style="margin:10px; color: #F64C72;">'.$_SESSION['name'].'</h2>
  <label>Answer Question</label>
</div></a>';

?>
<script type="text/javascript">
function myFunction() {
  if (document.getElementById("upvote").className == "up")
  document.getElementById("upvote").className = "no-up";
else
  document.getElementById("upvote").className = "up";
}


  <?php 
  echo "function delq(".$a."){
    console.log('Hi')";

  $con=mysqli_connect("localhost","root","","Project");
$sql = "DELETE FROM Questions WHERE id= $a";

if (mysqli_query($con, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($con);
}
echo"}";
mysqli_close($con);
?>
</script>
  

</body>
</html>

