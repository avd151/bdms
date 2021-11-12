<?php include('dbcon.php');
include('includes/header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blood Donation Management System</title>

</head>

<body>

    <?php
    include('includes/navbar.php');
    ?>
    <div class="container-fluid h-100 bg-grey">
        <div class="row">
            <div class="title text-white text-center my-3">
                <h1>Donate Blood to Save Lives!</h1>
                <p>Your drop of blood can build an ocean of happiness!</p>
                <a type="button" class="btn btn-success" target="_blank" href="usersignup.php">Register as Donor</a>
            </div><!-- /.bg -->
        </div>
        <div class="container text-center ">
            <img src="img/bg3.jpeg" alt="" style="width: 400px; height:fit-content">
        </div>
    </div>

</body>

<!-- <?php
        include('includes/footer.php');
        ?> -->

</html>