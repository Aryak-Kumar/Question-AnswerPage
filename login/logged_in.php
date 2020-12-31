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
html { font-size:100%; }
.topnav {
  overflow: hidden;
  background-color: #2f2fa2;
  justify-content: center;
  align-items: center;
}

.topnav a {
  float: left;
  color: black;
  text-align: center;
  text-decoration: none;
  font-size: 17px;
}

.upvotes-bar{
  min-height: 200px; 
  width: 50px; 
  background-color: #b3d9ff;
}
.upvotes-button{
  background-color: #b3d9ff; border: none; width: 50px; margin-top: 70px;
}
.topnav .search-container {
  float: right;
  margin-top: 20px;
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

.topnav .search-container button:hover {
  background: #F64C72;
  transform: scale(1.1);
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
.sort_con img{
    max-width: 100%;
  height: auto;
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
.txt_ {display: none;}
.ans-name{
  color: #F64C72; font-size: 20px;
}
.ques{
  margin: 20px;
  margin-right: 50px; 
  float: right; 
  min-height: 200px;
  width: 75%; 
  overflow: hidden;
  background-color: #e6f2ff; 
  color: black;
  display: flex;
  box-shadow: 3px 5px 2px grey;
  border-radius: 10px;
}
.ans-content{
  margin: 5px; font-size: 17px;
}
.askqu{
  margin: 20px;
  margin-right: 50px; 
  float: right; 
  min-height: 100px;
  width: 75%; 
  overflow: hidden;
  background-color: #e6f2ff; 
  color: black;
  display: flex;
  box-shadow: 3px 5px 2px grey;
  border-radius: 10px;
}
.askqu label{
  font-size: 30px; margin-top: 45px; color: #d1d1e0; cursor: pointer;
}
.answ label{
  font-size: 30px; margin-top: 45px; color: #d1d1e0; cursor: pointer;
}
.conten{
  margin: 5px; font-size: 17px;
}
.more_ans{
   display: none;
}
.ans img{
  width: 45px; margin: auto;
}
.ans img:hover{
  transform: scale(1.1);
  cursor: pointer;
}
.no-up{
  content: url("up-no.png");
}
.up{
  content: url("up.png");
}
.space button:hover{
  transform: scale(1.1);
  cursor: pointer;
}
.show-more{
  width:100px;
  background-color: #242582;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 15px;
}
.space{
margin-left: 50px; 
padding: 10px; 
float: left; 
height: 400px;
display: flex; 
flex-direction: column; 
justify-content: space-between; 
background-color: #242582; 
border-radius: 10px;
}

.space a{
text-decoration: none; color: white;cursor: pointer;
}
.space button{
background-color: #242582; border: none;color: white; font-size: 15px;
}
.search-btn{
  height: 20px;
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
  <a href="index.php" ><button class="log">Log Out</button></a> &nbsp;&nbsp;
</div>
</div>

<br>
<div style="justify-content: center; align-items: center; margin: auto; display: flex; flex-direction: column;">
  <div class="sort_con">
    <form name="Sort_type" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <button type="submit" name="sort" value='1' style="background-color: #553d67; border: none;" ><img height="45px" width="45px" src="hot.png"></button>
    <button type="submit" name="sort" value='2'style="background-color: #553d67; border: none;" ><img height="45px" width="45px" src="new.png"></button>
  </form>
  </div>
</div>
    
<div class='cent'>
<div class="space" >
<form id="spc" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<a id="algo" name='space_type' value = 'Algorithm'><button type="submit" name="space" value = 'Algorithm' >Algorithm</button></a> <br></form>


<form id="spc" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<a id="algo" name='space_type' value = 'Machine Learning'><button type="submit" name="space" value = 'Machine Learning'>Machine Learning</button></a> <br></form>

<form id="spc" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"><a id="algo" name='space_type' value = 'System'><button type="submit" name="space" value = 'System'>System</button></a> <br></form>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<a id="algo" name='space_type' value = 'JavaScript'><button type="submit" name="space" value = 'JavaScript'>JavaScript</button></a> <br>
</form>
</div>
</div>
<br>


<a href="askq.php" style="text-decoration: none;">
<div class="askqu" >


  <?php
$name = $_SESSION["name"];
 echo"<h3 style='margin:10px; color: #F64C72;'> Hi ".$name.",</h3>" ?>
  <label>What Is Your Question ?</label>
</div></a>

<?php
$con=mysqli_connect("localhost","root","","Project");
if (mysqli_connect_errno()){
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$sql = "SELECT * FROM Questions ORDER BY time_add DESC";
$result = mysqli_query($con, $sql);


  if (!empty($_POST['search']) || isset($_POST['search'])){
      $search = $_POST["search"];
$result = mysqli_query($con, "SELECT * FROM Questions WHERE title LIKE '%$search%'");
}


if (!empty($_POST['space']) || isset($_POST['space'])){
      $space_typ = $_POST["space"];
$result = mysqli_query($con, "SELECT * FROM Questions WHERE space = '$space_typ'");
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['sort'])){
      $sort = $_POST["sort"];
if($sort === '2'){
$sql = "SELECT * FROM Questions ORDER BY time_add DESC";
$result = mysqli_query($con, $sql);
}
if($sort === '1'){
$sql = "SELECT * FROM Questions ORDER BY upvotes DESC";
$result = mysqli_query($con, $sql);
}
}
}

$i=0;
$j=0;
if(mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result))
{
  $_SESSION['Ques'] = $row['id'];
  $qid = $_SESSION['Ques'];  
$answers = mysqli_query($con,"SELECT * FROM Answers where qid=$qid");
  $a=0;
  while($row2 = mysqli_fetch_array($answers)){
    $a++;
}

echo "<div class='ques' >
  <div class='upvotes-bar'>";

echo "<form method='post' action=upvote.php?value_key=".$qid."&loc=1><button type='submit' name='co_up' value = 'upvote1' class='upvotes-button' >
    <img width='40px' id='upvote' class='upvotes no-up'></button> </form>";


$upvotes = mysqli_query($con,"SELECT * FROM QUpvotes where qid=$qid");
    if($upvotes){
    $c=0;
    while($row2 = mysqli_fetch_array($upvotes)){
    $c++;
}
mysqli_query($con,"UPDATE Questions SET upvotes=$c WHERE id=$qid");

}

   echo "<p id='upvotes' style='vertical-align: center; text-align: center;'> <b>".$c."</b> </p>";

$upvotes = mysqli_query($con,"SELECT * FROM QUpvotes where qid=$qid");
    while($row2 = mysqli_fetch_array($upvotes)){
    if($_SESSION['id']===$row2['uid']){

      echo "<script>document.getElementsByClassName('upvotes')[".$i."].className = 'upvotes up';
      </script>"; 
    }
}


echo"</div>
  <div style=' display: flex; flex-direction: column;'>


    <button class='space-button'><a style='color: #242582;cursor: default; text-decoration: none;' href='#' >".$row['space']."</a></button>


 <button class='name-button'>".$row['creatorName']."</button>
 <p style='text-align: center; color: #1a8cff'>".$row['time_add']."</p>
  </div>
 <div style=' display: flex; flex-direction: column;'>
 
  <h1 style='margin: 10px;'><a href='answer2.php?value_key=".$qid."' id='title_lis' style='margin:auto; text-decoration: none; color: black; vertical-align: center; text-align: center;'>".$row['title']."</a></h1>";

if (strlen($row['content']) > 300)
  { 
    echo "<p class='conten'>".substr($row['content'],0,300)."<span class='mor'>...</span><span class='txt_'>"
      .substr($row['content'],300)."</span></p><button class='show-more' onclick='myFun(".$j.")' id='buton'>Show more</button>";
$j++;}
else
    echo "<p class='conten'>".$row['content']."</p>";

  echo "<button class='show_ans' style='border:none; background-color:#e6f2ff;' onclick='mfun(".$i.");'>
  <a class='ans' style='margin:auto; text-decoration: none; color: black; vertical-align: center; text-align: center;'><img src='faq.png'> (" .$a. ") </a></button>
 </div>
</div>";
$i++;
echo"<div class='more_ans' id='answers'>";
$result2 = mysqli_query($con,"SELECT * FROM Answers where qid =$qid");
while($row2 = mysqli_fetch_array($result2))
{

echo" <div class='answ'><div style=' display: flex; flex-direction: column;'>
  <div style=' display: flex; flex-direction: row; margin: 5px;'><h2 class='ans-name' id='answerer'>".$row2['uname']."</h2>&nbsp;&nbsp;&nbsp;&nbsp;<p style='color: #1a8cff' id='ans_date'>".$row2['time']."</p></div>
  <p class='ans-content'>".$row2['content']."</p>
 </div>
 </div>";}

 echo'<a href="answer.php?value_key='.$qid.'" style="text-decoration: none;">
<div class="answ" ><h2 style="margin:10px; color: #F64C72;">'.$_SESSION['name'].'</h2>
  <label>Answer Question</label>
</div></a>
</div>';

}
}

else{
  echo "<p style='vertical-align: center; text-align: center;'> <b>No Results Found</b> </p>";
}

?>

<script>

var form = document.getElementById("full");
document.getElementById("title_lis").addEventListener("click", function () {
  form.submit();
});


function mfun(a){
var all = document.getElementsByClassName("more_ans");
var content = all[a];

if (content.style.display === "none") {
      for(var i = 0;  i< all.length ;i++)
      {
        all[i].style.display='none';
      }
      content.style.display = "block";
    } 
else {
      content.style.display = "none";
    }
  }


function myFun(a) {
  var mor = document.getElementsByClassName("mor");
  var txt_ = document.getElementsByClassName("txt_");
  console.log(mor);
  console.log(txt_);
  console.log(a);
  var mor = mor[a];
  var txt_ = txt_[a];
  console.log(mor);
  console.log(txt_);
  if (mor.style.display === "none") {
    mor.style.display = "inline";
    document.getElementById("buton").innerHTML = "Show more"; 
    txt_.style.display = "none";
  } else {
    mor.style.display = "none";
    document.getElementById("buton").innerHTML = "Show less"; 
    txt_.style.display = "inline";
  }
}


</script>


</body>
</html>

