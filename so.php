<?php

$servername="localhost";
$username="root";
$passward="";
$database_name="form";

$conn=mysqli_connect($servername,$username,$passward,$database_name);
if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());
}

if(isset($_POST['save'])){
$firstname=$_POST['firstname'];
$email=$_POST['email'];
$aadhar=$_POST['aadhar'];
$phone=$_POST['phone'];
$vaccine=$_POST['vaccine'];


$sql_query="INSERT INTO `files` (`firstname`, `email`, `aadhar`, `phone`,`vaccine`) VALUES ('$firstname','$email','$aadhar','$phone','$vaccine')";

if(mysqli_query($conn,$sql_query))
{
    echo "Form submitted successfully !";
}
else{
    echo "Error: " . $sql_query . "" .mysqli_error($conn);
}
mysqli_close($conn);
}
?>









  
