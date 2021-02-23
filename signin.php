<?php    
$conn = new mysqli('localhost','root','','startup');
    if(isset($_POST['submit']))
    { 
            $pass=$_POST['pass'];
            $p=$_POST['pass1'];
            $email=$_POST['email'];
            $query = mysqli_query($conn, "SELECT `email` FROM `signin` WHERE `email` = '".$_POST['email']."'") or exit(mysqli_error($conn));
            if(mysqli_num_rows($query))
            {
                echo '<script>alert("Email already exists!")</script>';
            }
            elseif($pass===$p){
                $name=$_POST['user'];
                $phno=$_POST['phno'];
                $sql= "Insert into signin(user,phno,email,pass) values('$name', '$phno', '$email', '$pass')";
                $sql2= "Insert into login(email,pass) values('$email','$pass')";
                if ($conn->query($sql)===TRUE && $conn->query($sql2)===TRUE)
                {
                  echo '<script>alert("Successfully data recorded")</script>';
                  header("Location: hi.html");
                } else {
                    
                }
                
            }
            
        else{
            echo '<script>alert("Match the passwords")</script>';
            die();
        }
    }
?>