
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <title> Student Registration</title>
    <style>
        .design
        {
            margin-top: 200px;
            border: 2px solid black;
            border-radius: 8px;
        }
        .bg{
            background-color: aqua;
        }
    </style>
  </head>
  <body class="bg">
    <div class="container">
        <form class="design" method="post" action="validation.php" >
            <div>
                <center>
                <h1>
                    <b>Login</b>
                </h1>
            </center>
            </div>
               <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" name="email" id="email"placeholder="Enter Your User name"  autocomplete="off" required>
               </div>
               <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter Your password"   autocomplete="off" required>
               </div>
               
             <div>
                 <center>
                <button type="submit" class="btn btn-success " name="submit">Submit</button><br><br>
            </center>
             </div>
             <div>
                 <center>
                <button type="submit" class="btn btn-primary btn-lg btn-block btn-light" name="submit"><a href="student.php">Register For New student</a></button>
            </center>
             </div>
             
          </form>
    </div>

      </body>
</html>