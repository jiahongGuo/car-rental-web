<?php

$servername="localhost";
$username="root";
$password="";
$dbname="car-rental-users";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("connection failed.".$conn->connect_error);
}
else{
    $FirstName=$_POST["fname"];
    $LastName=$_POST["lname"];
    $Email=$_POST["email"];
    $Addr2=$_POST["address2"];
    $password=password_hash($_POST["pswd"],PASSWORD_DEFAULT);
    
    
    $query="INSERT INTO users(Fname,lname,email,address2,password)VALUES(
'".$FirstName."','".$LastName."','".$Email."','".$Addr2."','".$password."')";
    echo $query;
    $result=mysqli_query($conn,$query);
    if(!$result){
        echo"<p>something wrong with",$query,"</p>";
    }
    else{
        echo"<p>successfully added new record</p>";
    }
}
mysqli_close($conn);
?>