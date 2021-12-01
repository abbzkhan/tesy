<?php
include 'connect.php';
$id=$_GET['updateid'];
if(isset($_POST['name']))
{
    $name = $_POST['name'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql="update student set id=$id,name='$name',number='$number',address='$address',email='$email',password='$password'
    where id=$id";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        header('location:display.php');

    }
    else
    {
        die(mysqli_error($con));
    }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <title>Register Student</title>
    <style>
        .design
        {
            margin-top: 50px;
            border: 2px solid black;
            border-radius: 8px;
        }
    </style>
  </head>
  <body>
    <div class="container">
        <form class="design" method="post" action="" >
            <div>
                <center>
                <h1>
                    Registration Page
                </h1>
            </center>
            </div>
            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control" name="name" id="name"placeholder="Enter Your  Name" autocomplete="off">
             </div>
             <div class="form-group">
                <label>Mobile Number</label>
                <input type="text" class="form-control" name="number" id="number"placeholder="Enter Your User Mobile number"  autocomplete="off">
               </div>
 
               <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="address" id="address"placeholder="Enter Your Address"  autocomplete="off">
               </div>
 
               <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" name="email" id="email"placeholder="Enter Your User name"  autocomplete="off">
               </div>
               <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter Your password"   autocomplete="off">
               </div>
               
             <div>
                 <center>
                <button type="submit" class="btn btn-primary" name="submit">Update</button>
            </center>
             </div>
             
          </form>
    </div>

      </body>
</html>