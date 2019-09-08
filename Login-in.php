<?php
$servername="localhost";
$username="root";
$password="";
$dbname="car-rental-users";


$Password = $_POST["pswd"];
$Email = $_POST["email"];

$conn = new mysqli($servername, $username, $password,$dbname);

$query = "SELECT password FROM users WHERE email ='".$Email."' LIMIT 1";
$result = mysqli_query($conn, $query);
if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}

if(mysqli_num_rows($result)>0){
	$row = mysqli_fetch_array($result);
	if(password_verify($Password, $row["password"])){
	echo '<h2>Welcome '.$row['firstName'].'</h2>';
        echo'<li><a href="index.html">back</a></li>';
	}
	else
	{
	echo 'Invalid password';
           echo'<li><a href="index.php">back</a></li>';
}
mysqli_close($conn);
}
?>