<?php
// connect to the database
$connect = mysqli_connect("localhost", "root", "", "katomessi"); 

// putting the form in the database
if(isset($_POST["book"]))  
{  
      if(empty($_POST["Full_Name"]) && empty($_POST["phone"]) && empty($_POST["email"]) && empty($_POST["date"]))  
      {  
           echo '<script>alert("All Fields are required")</script>';  
      }  
      else  
      {  
           $name = mysqli_real_escape_string($connect, $_POST["Full_Name"]);  
           $phone = mysqli_real_escape_string($connect, $_POST["phone"]); 
           $email = mysqli_real_escape_string($connect, $_POST["email"]);
           $date = mysqli_real_escape_string($connect, $_POST["date"]);   
           $query = "INSERT INTO booking (name, phone, Email, Date) VALUES('$name', '$phone', '$email', '$date')";  
           if(mysqli_query($connect, $query))  
           {  
                echo '<script>alert("Thank you for Booking with Us")</script>';  
           }  
      }
}  




?>

<!-- html booking form -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <!-- Bootstrap core CSS -->
    <!-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title>Booking</title>
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }
        img {
            width: 10%;
            height: 10%;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h3 align="center"><img src="https://admissions.ndu.ac.ug/resources/images/logos/ndejje.png"></h3>
    <h1>Welcome to Ndejje University Teaching Hospital</h1>
    <h3 align="center">Booking Form</h3>
    <!-- booking form -->
    <div class="container" style="width:500px;">
        <form method="post">
            <label>Enter Full Name</label>
            <input type="text" name="Full_Name" class="form-control" required />
            <br />
            <label>Mobile Number</label>
            <input type="tel" name="phone" placeholder="070-22-23-132" required class="form-control" />
            <br />
            <label>Email</label>
            <input type="email" name="email" required class="form-control" />
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            <br />
            <label>Appointment Date</label>
            <input type="date" name="date" required class="form-control" required />
            <br />
            <label>Appointment Time</label>
            <input type="time" name="time" required class="form-control" />
            <br />
            <p align="center" href="home.php"><input type="submit" name="book" value="Book Now" class="btn btn-success" />
            <button type="button" class="btn btn-danger"></button>

        
            </p>
            <br />
        </form>
    </div>


</body>

</html>