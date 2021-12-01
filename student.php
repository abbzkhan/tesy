<?php
include 'connect.php';
if(isset($_POST['name']))
{
    $name = $_POST['name'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql="insert into student(name,number,address,email,password) values ('$name','$number',
    '$address','$email','$password');";
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
    <link rel="stylesheet" href="bgstyle.css">

    <title> Student Registration</title>
    <style>
        .design
        {
            margin-top: 50px;
            border: 2px solid black;
            border-radius: 8px;
        }
        .bg{
            background-color:aqua;

        }
    </style>
  </head>
  <body class="bg">
    <div class="container">
        <form class="design" method="post" action="#" name="myform" onsubmit="return validateform()" >
            <div>
                <center>
                <h1>
                    Registration Page
                </h1>
            </center>
            </div>
            <div class="form-group" id="name">
              <label>Name</label>
              <input type="text" class="form-control" name="name" id="name"placeholder="Enter Your  Name" autocomplete="off" required> <b><span class="formerror"> </span></b>
             </div>
             <div class="form-group" id="number">
                <label>Mobile Number</label>
                <input type="number" class="form-control" name="number" id="number"placeholder="Enter Your User Mobile number"  autocomplete="off" required><b><span class="formerror"> </span></b>
               </div>
 
               <div class="form-group" id="address">
                <label>Address</label>
                <input type="text" class="form-control" name="address" id="address"placeholder="Enter Your Address"  autocomplete="off" required><b><span class="formerror"> </span></b>
               </div>
 
               <div class="form-group" id="email">
                <label>Email address</label>
                <input type="email" class="form-control" name="email" id="email"placeholder="Enter Your User name"  autocomplete="off" required><b><span class="formerror"> </span></b>
               </div>
               <div class="form-group" id="password">
                <label>Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter Your password"   autocomplete="off" required><b><span class="formerror"> </span></b>
               </div>
               
             <div>
                 <center>
                <button type="submit" value="submit" class="btn btn-primary" name="submit">Submit</button>
            </center>
             </div>
             
          </form>
    </div>

      </body>
      <script>
          function seterror(id,error)
          {
            element = document.getElementById(id);
            element.getElementsByClassName('formerror')[0].innerHTML = error;
          }
          function validateform()
          {
              var returnval = true;
              var name = document.forms['myform']['name'].value;
            if(name.length<5)
            {
                seterror("name","*length of name is too short");
                returnval = false;
            }
            var number = document.forms['myform']['number'].value;
            if(number.length<10)
            {
                seterror("number","*length of number can,t be less than 10 digit");
                returnval = false;
            }
           
           return returnval;

          }
      </script>
</html>
