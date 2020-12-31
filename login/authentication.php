<?php      
    include('connection.php');  
    $email = $_POST['email'];  
    $password = $_POST['pwd'];  
       
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from User where email = '$email' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
             session_start();
             $_SESSION["name"] = $row['name'];
                            $_SESSION["email"] = $email;
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $row['id'];
            header("location: logged_in.php");
        }  
        else{ 
        header("location: login.php?value_key=Email or Password Not Valid!"); 
        }     
?>  