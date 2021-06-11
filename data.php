<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>All students</title>
	<!-- Bootstrap Css Link -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- Favicon Css Link -->
	<link rel="shortcut icon" href="assets/images/fav.ico" type="image/x-icon">
	<!-- Custom Css Link -->
	<link rel="stylesheet" href="style.css">
</head>
<body>


	<div class="container">
		<div class="card">
			<div class="card-header">
				<h3>All student information</h3>
				<a href='index.php' class="btn btn-primary">Add Student Data</a>
			</div>
			<div class="card-body">
				<table class="table">
					<thead>
						<tr>
							<th>Sl</th>
						    <th>Name</th>
						    <th>Username</th>
						    <th>Email</th>
						    <th>Age</th>
						    <th>Cell</th>
						    <th>Location</th>
						    <th>Photo</th>
						    <th>Status</th>
						</tr>
					</thead>
					<tbody>


						<tr>
							<th><?php  ?></th>
						    <td><?php  ?></td>
						    <td><?php  ?></td>
						    <td><?php  ?></td>
						    <td><?php  ?></td>
						    <td><?php  ?></td>
						    <td><?php  ?></td>
						    <td><img style="width:50px;height:40px" src="assets/images/<?php  ?>" alt=""></td>
						    <td>
							    <a href="view.php?id=<?php  ?>" class="btn btn-info" >View</a>
							    <a href="#" class="btn btn-danger" >Edit</a>
							    <a href="data.php?id=<?php  ?>" class="btn btn-warning" >Delete</a>
							    <a href="#" class="btn btn-success" >Active</a>
						    </td>
						</tr>

						

					</tbody>
				</table>
			</div>
			<div class="card-footer"></div>
		</div>
	</div>





	<!-- Javascript File Link -->
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/custom.js"></script>
	
</body>
</html>