<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "users";

$conn = mysqli_connect($server, $username, $password, $database);
if(!$conn){
//     echo "db connection success";
// }
// else{
    die("error due to ". mysqli_connect_error());
}
?>