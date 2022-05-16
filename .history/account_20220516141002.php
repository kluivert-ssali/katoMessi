<?php 
$connect = mysqli_connect("localhost", "root", "", "katomessi"); 

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">

      <p>this is an user page</p>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>