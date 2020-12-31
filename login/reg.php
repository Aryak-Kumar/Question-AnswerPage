<?php
include("connection.php") ;
 
if($_SERVER["REQUEST_METHOD"] == "POST"){

  $name = $_POST['name'];  
  $password = $_POST['pwd'];
  $email = $_POST['email'];  
  $confirmation_password = $_POST['pwd_con'];

    $sql = "SELECT * FROM User WHERE email = '$email' ";
    $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 0){  
              if($password === $confirmation_password){
                $insert = "INSERT INTO User (name ,email, password) VALUES ('$name', '$email', '$password')";
                if(mysqli_query($con, $insert)){
                  header("location: login.php?value_key=User Registered! Login Now");
                }
                else{
                  header("location: register.php?value_key=Error!");
                }
              }
              else{
                  header("location: register.php?value_key=Passwords Do Not Match!");
                }
              }
              else{
                header("location: register.php?value_key=User Already Exists!");
              }
}
?>