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
						<h1 class="page-header">Announcement Detail</h1>
					</div>
				</div>

				<div class="row">
					<div class=".col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								Total Records of announcement made
							</div>

							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">

										<?php

										include("../admin/dbconnect.php");

										$qry = "select * from announce";
										$result = mysqli_query($conn, $qry);


										echo "
						<thead>
												
						<tr>
							<th>Title</th>
							<th>Blood Needed</th>
							<th>Announcement Date</th>
							<th>Organizer</th>
							<th>Requirements</th>
						</tr>
						</thead>";

										while ($row = mysqli_fetch_array($result)) {
											echo "<tbody>
						  <tr>
						  <td>" . $row['announcement'] . "</td>
						  <td>" . $row['bloodneed'] . "</td>
						  <td>" . $row['dat'] . "</td>
						  <td>" . $row['organizer'] . "</td>
						  <td>" . $row['requirements'] . "</td>

						</tr>
						</tbody>";
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