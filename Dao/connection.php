<!-- <?php
    // $hostname="localhost";
    // $user="root";
    // $password="";
    // $database="buskaro";
    
    // $conn=new mysqli($hostname,$user,$password,$database);

    // if($conn->connect_errno){
    //     echo "Connection failed: (" .$conn->connect_errno . ") " . $conexao->connect_error;
    // }

?> -->

<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// session_start();
// $conn = mysqli_connect("localhost","root","","busify_db");
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,$username,$password);
 
if(!$conn){
    die("sorry we failed to connect" . mysqli_connect_error());
}

?>

