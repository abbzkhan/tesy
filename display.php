<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Student Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<style>
    #btn{
        float:left;

    }
    #btn2{
        float:right;
        margin-left: 1200px;
    }
    .bg{
        background-color: aqua;
    }
    </style>

</head>

<body class="bg">
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <div >      
                 <button class="btn btn-primary my-5" id="btn"> <a href="student.php" class="text-light">Add Student</a></button>
                
                 <button class="btn btn-dark my-5 " id="btn2"> <a href="login.php" class="text-light">Logout</a></button>
                

            </div>
        </nav>
    </div>
    <br>

    <br>

    </button>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Sr No</th>
                <th scope="col">name</th>
                <th scope="col">Number</th>
                <th scope="col">Address</th>
                <th scope="col">email</th>
                <th scope="col">Password</th>
                <th scope="col">Edit/Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "select * from student";
            $result = mysqli_query($con, $sql);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $number = $row['number'];
                    $address = $row['address'];
                    $email = $row['email'];
                    $password = $row['password'];
                    echo '<tr>
            <th scope="row">' . $id . '</th>
            <td>' . $name . '</td>
            <td>' . $number . '</td>
            <td>' . $address . '</td>
            <td>' . $email . '</td>
            <td>' . $password . '</td>
            <td>
            <button class="btn btn-primary"><a href="update.php?updateid=' . $id . '" class="text-light">Edit</a></button>
            <button  class="btn btn-danger"><a href="delete.php?deleteid=' . $id . '" class="text=light">Delete</a></button>
        </td>
            
          </tr>
            
            ';
                }
            }

            ?>

        </tbody>
    </table>
</body>

</html>