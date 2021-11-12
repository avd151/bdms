<html>

<head>


    <title>BDMS</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../icofont/icofont.min.css">


</head>


<body>
    <div id="wrapper">

        <?php include 'includes/donornav.php' ?>


        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class=".col-lg-12">
                        <h1 class="page-header">Search Donors by City and Blood Group</h1>
                    </div>
                </div>
                <div class="row">
                    <form action="#" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
                        <div class="form-group text-center justify-content-center">

                            <select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
                                <!-- <option>Select City</option> -->
                                <option value="Ahmednagar">Ahmednagar</option>
                                <option value="Akola">Akola</option>
                                <option value="Aurangabad">Aurangabad</option>
                                <option value="Beed">Beed</option>
                                <option value="Chandrapur">Chandrapur</option>
                                <option value="Dhule">Dhule</option>
                                <option value="Jalna">Jalna</option>
                                <option value="Kolhapur">Kolhapur</option>
                                <option value="Latur">Latur</option>
                                <option value="Mumbai">Mumbai</option>
                                <option value="Nagpur">Nagpur</option>
                                <option value="Nanded">Nanded</option>
                                <option value="Nashik">Nashik</option>
                                <option value="Pune">Pune</option>
                                <option value="Raigad">Raigad</option>
                                <option value="Ratnagiri">Ratnagiri</option>
                                <option value="Sangli">Sangli</option>
                                <option value="Satara">Satara</option>
                                <option value="Solapur">Solapur</option>
                                <option value="Thane">Thane</option>
                                <option value="Demo">Demo</option>
                            </select>
                        </div>
                        <div class="form-group center-aligned">
                            <select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px" required>
                                <!-- <option>Select Blood Group</option> -->
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                            </select>
                        </div>
                        <div class="form-group center-aligned">
                            <button type="submit" class="btn btn-lg btn-success" name="submit">Search</button>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class=".col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Total Records of Available Donors
                            </div>

                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">

                                        <?php
                                        if (isset($_GET['submit'])) {
                                            include("../admin/dbconnect.php");
                                            $city_info = $_GET['city'];
                                            $blood_group_info = $_GET['blood_group'];
                                            $qry = "select * from donor where address='$city_info' and bloodgroup='$blood_group_info'";
                                            $result = mysqli_query($conn, $qry);


                                            echo "
						<thead>
						<tr>
							<th>Name</th>
							<th>Username</th>
							<th>Guardian's Name</th>
							<th>Gender</th>
							<th>D.O.B</th>
							<th>Weight</th>
							<th>Blood Group</th>
							<th>Email</th>
							<th>Address</th>
							<th>Contact</th>
						</tr>
						</thead>";

                                            while ($row = mysqli_fetch_array($result)) {
                                                echo "<tbody>
						  <tr>
						  <td>" . $row['name'] . "</td>
						  <td>" . $row['username'] . "</td>
						  <td>" . $row['guardiansname'] . "</td>
						  <td>" . $row['gender'] . "</td>
						  <td>" . $row['dob'] . "</td>
						  <td>" . $row['weight'] . "</td>
						  <td>" . $row['bloodgroup'] . "</td>
						  <td>" . $row['email'] . "</td>
						  <td>" . $row['address'] . "</td>
						  <td>" . $row['contact'] . "</td>

						</tr>
						</tbody>";
                                            }
                                        }


                                        ?>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>