<?php


include 'connect.php';

$id = $_GET['updateid'];

$sql = "SELECT * FROM `crud` WHERE id=$id";
$result = mysqli_query($con, $sql);

$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "UPDATE `crud` set id = $id, name = '$name', email = '$email', 
    mobile = '$mobile', password = '$password' WHERE id=$id";

    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Updated successfully";
        // header('location:display.php');
    } else {
        die(mysqli_errno($con));
    }
}


?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>User</title>
</head>

<body>
    <div class="container my-5">
        <form method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" placeholder="Enter your name" name="name" id="name" class='form-control'
                    autocomplete="off" value=<?php echo $name;?>>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" placeholder="Enter your email" name="email" id="email" class='form-control'
                    autocomplete="off" value=<?php echo $email;?>>
            </div>

            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" placeholder="Enter your mobile number" name="mobile" id="mobile" class='form-control'
                    autocomplete="off" value=<?php echo $mobile;?>>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" placeholder="Enter your password" name="password" id="password"
                    class='form-control' value=<?php echo $password;?>>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>


</body>

</html>