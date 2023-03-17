<?php 
include('connect.php');

?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operation</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5">
            <a href="user.php" class="text-light">Add User</a>
        </button>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">SI no</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $sql= "SELECT * FROM `crud`";
                $result = mysqli_query($con,$sql);

                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $id=$row['id'];
                        $name=$row['name'];
                        $email=$row['email'];
                        $mobile=$row['mobile'];
                        $password=$row['password'];

                        echo '<tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$name.'</td>
                        <td>'.$email.'</td>
                        <td>'.$mobile.'</td>
                        <td>'.$password.'</td>
                      </tr>';
                    }
                }


                ?>
                <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr> -->
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>