<?php
$servername='localhost';
$username='root';
$password='';
$dbname='student_db';
$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {
    die('connection failed :'.$conn->connect_error);
}
else {
    echo('you are CONNECTED');
}
?>