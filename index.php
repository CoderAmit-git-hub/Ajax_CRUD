<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login your profile</title>
	<!-- Bootstrap Css Link -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- Custom Css Link -->
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!-- Add Student Data Modal -->
    <div id="popModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <form id="student_add" action="" method="POST" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-header">
                                <div id="altNoti"></div>
                                <h4>Registration Form</h4>

                                <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div> -->

                            </div>
                            <div class="card-body">
                                <div class="mb-3 row">
                                    <label for="intOne" class="col-sm-4 col-form-label">Full Name</label>
                                    <div class="col-sm-8">
                                        <input name="name" type="text" class="form-control" id="intOne">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="intTwo" class="col-sm-4 col-form-label">Email Address</label>
                                    <div class="col-sm-8">
                                        <input name="email" type="email" class="form-control" id="intTwo">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="intThree" class="col-sm-4 col-form-label">Mobile Number</label>
                                    <div class="col-sm-8">
                                        <input name="mobile" type="text" class="form-control" id="intThree">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="intFour" class="col-sm-4 col-form-label">Location</label>
                                    <div class="col-sm-8">
                                        <select name="loct" id="intEight" class="form-select">
                                            <option value="">-Select-</option>
                                            <option value="Dhaka">Dhaka</option>
                                            <option value="Mymensingh">Mymensingh</option>
                                            <option value="Rangpur">Rangpur</option>
                                            <option value="Rajshahi">Rajshahi</option>
                                            <option value="Khulna">Khulna</option>
                                            <option value="Sylhet">Sylhet</option>
                                            <option value="Comilla">Comilla</option>
                                            <option value="Barishal">Barishal</option>
                                            <option value="Chittagong">Chittagong</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="formFile" class="col-sm-4 col-form-label">Upload</label>
                                    <div class="col-sm-8">
                                        <input name="photo" class="form-control" type="file" id="formFile">
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <button name="subBtn" type="submit" class="btn btn-primary mb-3">Register</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Update Student Data Modal -->
    <div id="update_stu_modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <form id="stu_upd_form" action="" method="POST" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-header">
                                <div id="update_mess"></div>
                                <h4>Update Student Data</h4>
                            </div>
                            <div class="card-body">
                                <div class="mb-3 row">
                                    <label for="intOne" class="col-sm-4 col-form-label">Full Name</label>
                                    <div class="col-sm-8">
                                        <input name="name" type="text" class="form-control" id="intOne">
                                        <input name="stu_up_id" type="hidden" >
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="intTwo" class="col-sm-4 col-form-label">Email Address</label>
                                    <div class="col-sm-8">
                                        <input name="email" type="email" class="form-control" id="intTwo">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="intThree" class="col-sm-4 col-form-label">Mobile Number</label>
                                    <div class="col-sm-8">
                                        <input name="mobile" type="text" class="form-control" id="intThree">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="intFour" class="col-sm-4 col-form-label">Location</label>
                                    <div class="col-sm-8">
                                        <select name="loct" id="intEight" class="form-select">
                                            <option value="">-Select-</option>
                                            <option value="Dhaka">Dhaka</option>
                                            <option value="Mymensingh">Mymensingh</option>
                                            <option value="Rangpur">Rangpur</option>
                                            <option value="Rajshahi">Rajshahi</option>
                                            <option value="Khulna">Khulna</option>
                                            <option value="Sylhet">Sylhet</option>
                                            <option value="Comilla">Comilla</option>
                                            <option value="Barishal">Barishal</option>
                                            <option value="Chittagong">Chittagong</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="up_img" class="mb-3 form-label">
                                    <img width="150px" src="" alt="">
                                    <input type="hidden" name="old_photo">
                                </div>
                                <div class="mb-3 row">
                                    <label for="formFile" class="col-sm-4 col-form-label">Upload</label>
                                    <div class="col-sm-8">
                                        <input name="new_photo" class="form-control" type="file" id="formFile">
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <button name="subBtn" type="submit" class="btn btn-primary mb-3">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Single Student Data Modal -->
    <div id="sigStuMol" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="card">
                        <div class="card-header">
                            <h4 id="sig_stu_head" >Mizanur Rahman</h4>
                        </div>
                        <div class="card-body">
                            <div class="text-center pt-4 pb-4">
                                <img class="shadow" style="width:200px;height:200px;border-radius:50%;border:5px solid #d2ecff;" src="" alt="">
                            </div>
                            <hr>
                            <div>
                                <table class="table table-hover">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Name</th>
                                            <td id="sigStuName" colspan="2">Mizanur Rahman</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Email</th>
                                            <td id="sigStuEmail" colspan="2">mizan@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Cell</th>
                                            <td id="sigStuCell" colspan="2">01794179737</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Location</th>
                                            <td id="sigStuLoct" colspan="2">Mymensingh</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Student Information -->
    <div class="container">
		<div class="card">
			<div class="card-header">
				<h3>All student information</h3>
                <div class="confMess"></div>
				<a id="student_show" href='#' class="btn btn-primary">Add Student Data</a>
			</div>
			<div class="card-body">
				<table class="table">
					<thead>
						<tr>
							<th>Sl</th>
						    <th>Full Name</th>
						    <th>Email</th>
						    <th>Cell</th>
						    <th>Location</th>
						    <th>Photo</th>
						    <th>Status</th>
						</tr>
					</thead>
					<tbody id="all_student_data">


						

					</tbody>
				</table>
			</div>
			<div class="card-footer"></div>
		</div>
	</div>
<br>


<br>
<br>
<br>
<br>

	<!-- Javascript File Link -->
	<script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
	
</body>
</html>