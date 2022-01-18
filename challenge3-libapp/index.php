<!DOCTYPE html>
<html lang="en"> 
<head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lib App</title>

    </head>

    <body>
        <h1>PHP Library App</h1>

        <h2>Add a Book to the Library</h2>

  <form action="insert-book.php" method="POST">
  <p>Book Name</p> <input type="text" name="name">
  <p>Book Author</p> <input type="text" name="author">
  <input type="submit" value="Send"><input type="reset" value="Clear">
  </form>

<?php
include 'select-books.php';
 ?>

       
  <form action="delete.php" method="POST">
  <input type="number" name="bookID">
  <input type="submit" value="delete">
  </form>

</body>

</html>