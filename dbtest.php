<?php
# Fill our vars and run on cli
# $ php -f db-connect-test.php
function OpenCon()
{ 
    $servername="localhost";
    $username="root";
   $password="";
   $dbname="car-rental-users";

    
    $link = mysqli_connect($servername, $username, $password,$dbname) or die("Unable to Connect to '$dbhost'");
    
    return $link;
}

function CloseCon($link){
    $link -> close();
}

?>