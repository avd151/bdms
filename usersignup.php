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
                            <form role="form" action="usersignup.php" method="post" onsubmit="return validate()">

                                <div class="form-group">
                                    <label>Enter Full Name</label>
                                    <input class="form-control" name="name" type="text" placeholder="Full Name(Name Surname)" required>
                                </div>
                                <div class="form-group">
                                    <label>Enter Guardian's Name</label>
                                    <input class="form-control" placeholder="Guardian's Name" name="guardiansname" required>
                                </div>

                                <div class="form-group">
                                    <label>Gender [ M/F ]</label>
                                    <input class="form-control" placeholder="Male or Female" name="gender" required>
                                </div>

                                <div class="form-group">
                                    <label>Enter Date Of Birth</label>
                                    <input class="form-control" type="date" name="dob" required><span id="age-msg"></span>
                                </div>

                                <div class="form-group">
                                    <label>Enter Weight</label>
                                    <input class="form-control" type="number" placeholder="Enter Weight" name="weight" required><span id="weight-msg"></span>
                                </div>

                                <div class="form-group">
                                    <label>Enter Blood Group</label>
                                    <input class="form-control" placeholder="Eg: B+" name="bloodgroup" required>
                                </div>

                                <div class="form-group">
                                    <label>Enter Email Id</label>
                                    <input class="form-control" type="email" placeholder="Enter Email Id" name="email" required> <span id="email-msg"></span>
                                </div>

                                <div class="form-group">
                                    <label>Enter Address</label>
                                    <input class="form-control" type="text" placeholder="Enter Address (City Name)" name="address" required>
                                </div>

                                <div class="form-group">
                                    <label>Enter Contact Number</label>
                                    <input class="form-control" type="tel" placeholder="Contact Number (10 Digit)" name="contact" required pattern="[0-9]{10}"><span id=" mob-msg"></span>
                                </div>

                                <div class="form-group">
                                    <label>Enter Username</label>
                                    <input class="form-control" placeholder="Enter Here" name="username" type="text" required>
                                    <p class="help-block">In order to create Donor's account.</p>
                                    <p class="help-block">Example: user1234</p>
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

    function validate() {
        var email = document.getElementById("email").value;
        var mobNo = document.getElementById("contact").value;
        var currYear = new Date().getFullYear()
        var dob = document.getElementById("dob").value
        var dobArray = dob.split('-');
        var year = dobArray[0];
        var age = currYear - year;
        var weight = document.getElementById("weight").value
        if (email.IndexOf('@') <= 0) {
            document.getElementById('email-msg').innerHTML = "Please Enter a Valid Email Address";
            return False;
        }
        if (strlen(mobNo) != 10 || isNaN(mobNo)) {
            document.getElementById('mob-msg').innerHTML = "Please Enter a 10 Digit Contact Number";
            return False;
        }
        if (age < 18 || age >= 65) {
            document.getElementById("age-msg").innerHTML = "Sorry, you cannot register as Donor, you must be between 18-65 years to donate Blood";
            return False;
        }
        if (weight < 50) {
            document.getElementById("weight-msg").innerHTML = "Sorry, you cannot register as Donor, you must at least 50 kg weight to donate Blood";
            return False;
        }
        return True;
    }
</script>
<?php
include('includes/footer.php');
?>