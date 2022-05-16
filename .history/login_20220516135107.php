<!-- <?php
// connect to the database
$connect = mysqli_connect("localhost", "root", "", "katomessi"); 

// start the login process session_start();
session_start();

// checking for the login details

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($connect, $_POST['name']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

//    checking the details in the database
   $select = " SELECT * FROM login WHERE name = '$name' && password = '$pass' ";

   $result = mysqli_query($connect, $select);

//    creating the if statement that directs each lo
   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin.php');

      }elseif($row['user_type'] == 'doctor'){

         $_SESSION['user_name'] = $row['name'];
         header('location:doctor.php');

      }elseif($row['user_type'] == 'lab'){

        header('location:lab.php');

      }elseif($row['user_type'] == 'reception'){

          header('location:reception.php');

      }elseif($row['user_type'] == 'nursing'){
          header('location:nursing.php');

      }elseif($row['user_type'] == 'acount'){

          header('location:acount.php');

      }
   }else{
      $error[] = 'incorrect username or password!';
   }

};
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input name="name">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>

</body>
</html>