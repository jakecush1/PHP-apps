
<?php

// MYSQLI Procedural Query 

$bookName = $_POST['name'];
$authorName = $_POST['author'];

// echo $bookName;
// echo $authorName;

$link = mysqli_connect("localhost", "jake", "admin", "libappDB");
// Error Checking PHP

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


//$sql = "INSERT INTO data(data) VALUES ('{$_POST['name']}')";
$sql = "INSERT INTO books (BookTitle,AuthorName) VALUES ('$bookName','$authorName')";


// INSERT INTO Persons (PersonID,FirstName,LastName,Age) VALUES ('4','joetest','joe','19');
if (mysqli_query($link,$sql)) {  
echo "success added" . $bookName . $authorName;
  header("Location: http://167.114.138.180/web-107/challenges/libapp/index.php");

};



?>