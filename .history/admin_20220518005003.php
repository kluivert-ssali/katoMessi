<?php
$connect = mysqli_connect("localhost", "root", "", "katomessi"); 


if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($connect, $_POST['name']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM login WHERE name = '$name' && password = '$pass' ";

   $result = mysqli_query($connect, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO login(name, password, user_type) VALUES('$name','$pass','$user_type')";
         mysqli_query($connect, $insert);
         header('location:admin.php');
      }
   }

};


?>

