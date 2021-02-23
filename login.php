<?php
$conn = new mysqli('localhost','root','','startup');
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $query= mysqli_query($conn,"Select id from login where email='$email' And pass='$password'");
    $rows = mysqli_num_rows($query);
    if($rows == 1){
        echo '<script>alert("Successfully loged in")</script>';
        header("Location: hi.html");
    }else{
        echo '<script>alert("Invalid credentials")</script>';
    }
}
?>