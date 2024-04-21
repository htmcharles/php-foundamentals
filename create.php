<?php

include'connect.php';

if(isset($_POST['submit'])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$sql="INSERT INTO users(fname,lname,email,password,gender) VALUES
('$fname','$lname','$email','$password','$gender')";
$result = $conn->query($sql);
if ($result==true) {
    echo 'New record created successfully';

}
else {
    echo 'error:'.$sql.'<br>'.$conn->error;
}

$conn->close();
} 
?>
<html>
    <a class="btn btn-into" href="sign_up.html"><br><br>Back</a>
    <a class="btn btn-into" href="read.php"><br><br>View record from database</a>
</html>