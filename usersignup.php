<?php
include('includes/header.php');
include('includes/navbar.php');
?>
<?php
if (isset($_POST['name'])) {
    $name = $_POST["name"];
    $guardiansname = $_POST["guardiansname"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $weight = $_POST["weight"];
    $bloodgroup = $_POST["bloodgroup"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $contact = $_POST["contact"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    include 'admin/dbconnect.php';
    //code after connection is successfull
    $qry = "insert into donor(name,guardiansname,gender,dob,weight,bloodgroup,email,address,contact,username,password) values ('$name','$guardiansname','$gender','$dob','$weight','$bloodgroup','$email','$address','$contact', '$username', '$password')";
    $result = mysqli_query($conn, $qry); //query executes

    if (!$result) {
        echo "ERROR";
    } else {
        echo " <div class='text-center text-success'><h1>Registration Successful!</h1>";
        echo " <a href='index.php' div style='text-align: center'><h3>Go Back</h3>";
    }
}
?>
<h2 class="text-center text-danger">Register as a Donor!</h2>
<div class="container mx-5">
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" action="usersignup.php" method="post">

                                <div class="form-group">
                                    <label>Enter Full Name</label>
                                    <input class="form-control" name="name" type="text" placeholder="Example:Harry Den" required>
                                </div>
                                <div class="form-group">
                                    <label>Enter Guardian's Name</label>
                                    <input class="form-control" placeholder="Guardian's Name" name="guardiansname" required>
                                </div>

                                <div class="form-group">
                                    <label>Gender [ M/F ]</label>
                                    <input class="form-control" placeholder="M or F" name="gender" required>
                                </div>

                                <div class="form-group">
                                    <label>Enter D.O.B</label>
                                    <input class="form-control" type="date" name="dob" required>
                                </div>

                                <div class="form-group">
                                    <label>Enter Weight</label>
                                    <input class="form-control" type="number" placeholder="Enter Weight" name="weight" required>
                                </div>

                                <div class="form-group">
                                    <label>Enter Blood Group</label>
                                    <input class="form-control" placeholder="Eg: B+" name="bloodgroup" required>
                                </div>

                                <div class="form-group">
                                    <label>Enter Email Id</label>
                                    <input class="form-control" type="email" placeholder="Enter Email Id" name="email" required>
                                </div>

                                <div class="form-group">
                                    <label>Enter Address</label>
                                    <input class="form-control" type="text" placeholder="Enter Address Here" name="address" required>
                                </div>

                                <div class="form-group">
                                    <label>Enter Contact Number</label>
                                    <input class="form-control" type="number" placeholder="Contact Number" name="contact" required>
                                </div>

                                <div class="form-group">
                                    <label>Enter Username</label>
                                    <input class="form-control" placeholder="Enter Here" name="username" required>
                                    <p class="help-block">In order to create donor's account.</p>
                                    <p class="help-block">Example: harry20</p>
                                </div>

                                <div class="form-group">
                                    <label>Enter Password</label>
                                    <input class="form-control" name="password" type="password" id="myInput" required>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" onclick="myFunction()">Show Password
                                        </label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success" class="btn btn-success" style="border-radius:0%" ;>Submit Form</button>


                            </form>


                        </div>

                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div>
<script>
    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
<?php
include('includes/footer.php');
?>