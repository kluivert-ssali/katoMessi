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

//    creating the if statement that directs each login details to specific user_pages #access control logic
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

      }elseif($row['user_type'] == 'account'){

          header('location:account.php');

      }
   }else{
      $error[] = 'incorrect username or password!';
   }

};
?> -->

