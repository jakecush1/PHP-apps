<?php 
$link = mysqli_connect("localhost", "jake", "admin", "libappDB");

$bookID = $_POST['bookID'];

$delete = "DELETE FROM books WHERE BookID = $bookID";


if (mysqli_query($link,$delete)) {  
    echo "success removed " . $bookID;
    header("Location:http://167.114.138.180/web-107/challenges/libapp/index.php");
  

    };

   

?>
