<?php
include('connection.php');
$name="new";
$username=$_POST['email'];
$password=$_POST['password'];

echo("<br><center><h3>Password Changed Successfully!</h3></center><br>");
echo("<center>Your Username:\t");
echo($username);
echo("</center><br>");
echo("<center>Your New Password:\t");
echo($password);
echo("</center><br>");
$sql="INSERT INTO `users` (`Name`, `Username`, `Password`) VALUES ('$name', '$username', '$password')";
mysqli_query($conn,$sql);
?>

<html>
    <body>
        <center>
            <p> Want to Login? <a href="login.html" style="text-decoration:none;"> Login Here </a></p>
        </center>
    </body>
</html>