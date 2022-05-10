<?php
// connect to the database



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
        body,  {}
        .bg {
            background-image: url('https://admissions.ndu.ac.ug/resources/images/logos/ndejje.png');
            background-repeat: no-repeat;


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
    <div class="bg">
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
            <input type="tel" name="phone" placeholder="070-22-23-132" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required  class="form-control" />  
            <br />  
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div> 
            <br />
            <label>Appointment Date</label>
            <input type="date" name="date" required class="form-control" />
            <br />
            <label>Appointment Time</label>
            <input type="time" name="time" required class="form-control" />
            <br />
            <p align="center"><input type="submit" name="login" value="Book Now" class="btn btn-success" /></p>
            <br /> 
       </form>  
    </div>

    </div>
    
</body>

</html>