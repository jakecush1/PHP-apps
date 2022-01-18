<?php
$link = mysqli_connect("localhost", "jake", "admin", "libappDB");
$sql = "SELECT * FROM books";
$res = mysqli_query($link, $sql);

// print_r($res);

if($res) {
  
  while($row = mysqli_fetch_row($res)){    // while their are resutls do this 
    
    echo "<br>Book ID: " . $row[0] . " <br>";
    echo "Book Name: " . $row[1] . " <br>";
    echo "Book Author: " . $row[2] . " <br>";

  };
};

?>

