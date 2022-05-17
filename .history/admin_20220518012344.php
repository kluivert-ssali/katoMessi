<?php  
 

?> 





<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   <title>Admin Dashboard</title>
</head>
<style>
   body {
      color: gray
   }
   img {
         width: 20%;
         height: 20%;
   }
</style>
<body>
<?php 
    echo '<label style="position: absolute; font-size: 200%; top: 0; right: 0; width: 100px; text-align:right;"><a href="logout.php">Logout</a></label>'; 
?>
        
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center"><img src="https://admissions.ndu.ac.ug/resources/images/logos/ndejje.png"></h3>  
                <br />  
                <h1> Welcome  Administrator</h1>
           </div>  
           <br />
           <br />
               <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add User
</button>
<?php
$connect = mysqli_connect("localhost", "root", "", "katomessi");  
if(isset($_POST["register"]))  
 { 
      if(empty($_POST["username"]) && empty($_POST["password"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {    $name = mysqli_real_escape_string($connect, $_POST["name"]);
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $Email = mysqli_real_escape_string($connect, $_POST["Email"]);
           $password = mysqli_real_escape_string($connect, $_POST["password"]);
           $cpassword = mysqli_real_escape_string($connect, $_POST["cpassword"]);
           if ($password != $cpassword) 
               {
                    echo '<script>alert("Please check your passwords")</script>';
               } 
           else{
               $password = md5($password);  
               $query = "INSERT INTO user (name, username, Email, password) VALUES('$name','$username','$Email','$password')";  
               if(mysqli_query($connect, $query))  
               {  
                    echo '<script>alert("Registration Done")</script>';  
               }  

           } 
           
      }

}  
?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD USER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <form method="POST" action=""> 
      <div class="modal-body">

               <label>Enter Name</label>
               <input type="text" name="name" class="form-control" required >
               <br /> 
               <label>Enter Username</label>  
               <input type="text" name="username" class="form-control"  required >  
               <br />  
               <label>Enter Email Address</label>
               <input type="Email" name="Email" class="form-control" required >
               <br />
               <label>Enter Password</label>  
               <input type="password" name="password" class="form-control"  required>  
               <br />  
               <label>Confirm Password</label>
               <input type="password" name="cpassword" class="form-control"   required>
               <br /> 
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="register" value="Register" class="btn btn-primary" />
      </div>
      </form>  
    </div>
  </div>
</div>
<!--################################################################ --->
<!-- Edit -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EDIT USER DATA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <form method="POST" action="Edit.php"> 
      <div class="modal-body">
               <input type="hidden" name="update_id" id="update_id">

               <label>Enter Name</label>
               <input type="text" name="name" id="name" class="form-control" required >
               <br /> 
               <label>Enter Username</label>  
               <input type="text" name="username" id="username"  class="form-control"  required >  
               <br />  
               <label>Enter Email Address</label>
               <input type="Email" name="Email" id="Email" class="form-control" required >
               <br />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="edit" class="btn btn-success">Save Edit</button>
      </div>
      </form>  
    </div>
  </div>
</div>

<!--################################################################ --->

<br />
<br /> 
           <table class="table table-striped table-bordered table-hover">
              <thead>
                 <tr>
                   <th scope="col">Id</th>
                   <th scope="col">Username</th>
                   <th scope="col">User_Type</th>
                   <th scope="col">Created_On</th>
                 </tr>
              </thead>
              <tbody>
              <?php 
              $conn = mysqli_connect("localhost", "root", "", "katomessi");  
              $sql = "SELECT id, name, user_type, actived_on from login";
              $result = $conn-> query($sql);
              if ($result-> num_rows > 0) {
                   while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>". $row["id"] . "</td><td>". $row["name"]. "</td><td>". $row["user_type"]. "</td><td>". $row["actived_on"]. "</td><td>". "<button type='button' name='edit' class='btn btn-primary editbtn'>Edit</button> <button type='submit' name='delete' class='btn btn-danger'>Delete</button>".  "</td></tr>";
                        
                   }
                   
                   echo "</table>";
              }
              else {
                   echo "0 results";
              }

              ?>
              
                  
              </tbody> 
           </table>

           <script type="text/javascript">
           $(document).ready(function(){
                $('.editbtn').on('click', function() {
                     $('#editmodal').modal('show');

                     $tr = $(this).closest('tr');

                     var data = $tr.children("td").map(function() {
                          return $(this).text();
                     }).get();

                     console.log(data);

                     $('#update_id').val(data[0]);
                     $('#name').val(data[1]);
                     $('#username').val(data[2]);
                     $('#Email').val(data[3]);
                });
           });
           </script>

   










<footer class="text-muted py-5">
    <div class="container">
      <p class="float-end mb-1">
        <a href="#">Back to top</a>
      </p>
      <p class="mb-1">Created by <a href="https://kluivertssali.netlify.app/">Kluivertssali</a> | &copy; 2022 All rights reserved</p>
    </div>
</footer>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>