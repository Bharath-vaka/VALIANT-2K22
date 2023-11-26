<?php
require_once "db.php";
if (isset($_POST['submit'])) {
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phno = mysqli_real_escape_string($conn, $_POST['phno']);
$clgname = mysqli_real_escape_string($conn, $_POST['clgname']);
$clgid = mysqli_real_escape_string($conn, $_POST['clgid']);
$placename = mysqli_real_escape_string($conn, $_POST['placename']);
$year = mysqli_real_escape_string($conn, $_POST['year']);
 $branchname = $_POST['sel_depart'];
 $eventname = $_POST['sel_user'];
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$accom = mysqli_real_escape_string($conn, $_POST['accom']);
$tname1 = mysqli_real_escape_string($conn, $_POST['tname1']);
$temail1 = mysqli_real_escape_string($conn, $_POST['temail1']);
$tphno1 = mysqli_real_escape_string($conn, $_POST['tphno1']);
$tgender1 = mysqli_real_escape_string($conn, $_POST['tgender1']);
$taccom1 = mysqli_real_escape_string($conn, $_POST['taccom1']);
$tname2 = mysqli_real_escape_string($conn, $_POST['tname2']);
$temail2 = mysqli_real_escape_string($conn, $_POST['temail2']); 
$tphno2 = mysqli_real_escape_string($conn, $_POST['tphno2']);
$tgender2 = mysqli_real_escape_string($conn, $_POST['tgender2']);
$taccom2 = mysqli_real_escape_string($conn, $_POST['taccom2']);
$tname3 = mysqli_real_escape_string($conn, $_POST['tname3']);
$temail3 = mysqli_real_escape_string($conn, $_POST['temail3']); 
$tphno3 = mysqli_real_escape_string($conn, $_POST['tphno3']);
$tgender3 = mysqli_real_escape_string($conn, $_POST['tgender3']);
$taccom3 = mysqli_real_escape_string($conn, $_POST['taccom3']);
$tname4 = mysqli_real_escape_string($conn, $_POST['tname4']);
$temail4 = mysqli_real_escape_string($conn, $_POST['temail4']); 
$tphno4 = mysqli_real_escape_string($conn, $_POST['tphno4']);
$tgender4 = mysqli_real_escape_string($conn, $_POST['tgender4']);
$taccom4 = mysqli_real_escape_string($conn, $_POST['taccom4']);
$isValid=true;
if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
$name_error = "Name must contain only alphabets and space";
}
if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
$email_error = "Please Enter Valid Email ID";
}
if(!filter_var($temail1,FILTER_VALIDATE_EMAIL)) {
$email_error = "Please Enter Valid Email ID";
}
if(!filter_var($temail2,FILTER_VALIDATE_EMAIL)) {
$email_error = "Please Enter Valid Email ID";
}
if(strlen($phno) && strlen($tphno1)&& strlen($tphno2)&& strlen($tphno3)== 10) {
$mobile_error = "Mobile number must be minimum of 10 characters";
}
$check=mysqli_query($conn,"select * from student_details where clgid='$clgid' and eventname='$eventname'");
$checkrows=mysqli_num_rows($check);
 if($checkrows>0) {
	 $message="You are registered for this event already";
      echo "<script>alert('$message');</script>";
   } else {  
 $sql= "INSERT INTO student_details(name,email,phno,placename,clgname,clgid,year,branchname,eventname,gender,accom,tname1,temail1,tphno1,tgender1,taccom1,tname2,temail2,tphno2,tgender2,taccom2,tname3,temail3,tphno3,tgender3,taccom3,tname4,temail4,tphno4,tgender4,taccom4) VALUES('" . $name . "','" . $email . "','" . $phno . "','" . $placename . "','" . $clgname . "','" . $clgid . "','" . $year . "','$branchname','$eventname','" . $gender . "','" . $accom . "','" . $tname1 . "','" . $temail1 . "','" . $tphno1 . "','" . $tgender1 . "','" . $taccom1 . "','" . $tname2 . "','" . $temail2 . "', '" . $tphno2 . "','" . $tgender2 . "','" . $taccom2 . "','" . $tname3 . "','" . $temail3 . "', '" . $tphno3 . "','" . $tgender3 . "','" . $taccom3 . "','" . $tname4 . "','" . $temail4 . "', '" . $tphno4 . "','" . $tgender4 . "','" . $taccom4 . "')";
if(mysqli_query($conn, $sql))
            {
                $status = "Registration Successfull..";
             
                $row['name'] = "";
                $row['email'] = "";
                $row['phno'] = "";
				$row['placename'] = "";
                $row['clgname'] = "";
                $row['clgid'] = "";
				$row['year'] = "";
				$row['branchname'] = "";
				$row['eventname'] = "";
				$row['gender'] = "";
				$row['accom'] = "";
				$row['tname1'] = "";
				$row['temail1'] = "";
				$row['tphno1'] = "";
				$row['tgender1'] = "";
				$row['taccom1'] = "";
				$row['tname2'] = "";
				$row['temail2'] = "";
				$row['tphno2'] = "";
				$row['tgender2'] = "";
				$row['taccom2'] = "";
				$row['tname3'] = "";
				$row['temail3'] = "";
				$row['tphno3'] = "";
				$row['tgender3'] = "";
				$row['taccom3'] = "";
				$row['tname4'] = "";
				$row['temail4'] = "";
				$row['tphno4'] = "";
				$row['tgender4'] = "";
				$row['taccom4'] = "";
            }
            else
            {
                print '<span>'.mysqli_error($conn).'</span>';
            }
			echo "<script>alert('$status');</script>";
}
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Registration Form</title>
<link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">

    
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            $("#sel_depart").change(function(){
                var deptid = $(this).val();

                $.ajax({
                    url: 'getUsers.php',
                    type: 'post',
                    data: {depart:deptid},
                    dataType: 'json',
                    success:function(response){

                        var len = response.length;

                        $("#sel_user").empty();
                        for( var i = 0; i<len; i++){
                            var id = response[i]['id'];
                            var name = response[i]['eventname'];

                            $("#sel_user").append("<option value='"+id+"'>"+name+"</option>");

                        }
                    }
                });
            });

        });
    </script>
  
    
    </head>

<body>
	<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
		<div class="wrapper wrapper--w680">
			<div class="card card-4">
				<div class="card-body">
					<h2>VALIANT 2K22 Registration</h2>
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
					<fieldset>
					<legend>Team Leader Details</legend>
						<div class="row row-space">
							<div class="col-2">
								<div class="input-group">
									<label>Name</label>
									<input type="text" name="name" class="input--style-4" value="" maxlength="50" required="">
									<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
								</div>
							</div>
							<div class="col-2">
								<div class="input-group">
									<label>Email</label>
									<input type="email" name="email" class="input--style-4" value="" maxlength="50" required="">
									<span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
								</div>
							</div>
						</div>
						<div class="row row-space">
							<div class="col-2">
								<div class="input-group">
									<label>Mobile</label>
									<input type="text" name="phno" class="input--style-4" value="" maxlength="10" required="" pattern="[1-9]{1}[0-9]{9}">
									<span class="text-danger"><?php if (isset($phno_error)) echo $phno_error; ?></span>
								</div>
							</div>
							<div class="col-2">
								<div class="input-group">
									<label>Place</label>
									<input type="text" name="placename" class="input--style-4" value="" maxlength="50" required="">
									<span class="text-danger"><?php if (isset($placename_error)) echo $placename_error; ?></span>
								</div>
							</div>
						</div>
								<div class="input-group">
									<label>College Name</label>
									<input type="text" name="clgname" class="input--style-4" value="" maxlength="50" required="">
									<span class="text-danger"><?php if (isset($clgname_error)) echo $clgname_error; ?></span>
								</div>
						
							<div class="row row-space">
								<div class="col-2">
									<div class="input-group">
										<label>College Register No.</label>
										<input type="text" name="clgid" class="input--style-4" value="" maxlength="50" required="">
										<span class="text-danger"><?php if (isset($clgid_error)) echo $clgid_error; ?></span>
									</div>
								</div>
								<div class="col-2">
									<div class="input-group">
										<label class="label">Year</label>
										<div class="rs-select2 js-select-simple select--no-search">
											<select name="year" required="">
												<option disabled="disabled" selected="selected">Choose option</option>
												<option>I</option>
												<option>II</option>
												<option>III</option>
												<option>IV</option>
											</select>
										<div class="select-dropdown"></div>
									</div>
									<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
								</div>
							</div>
							<div class="col-2">
								<div class="input-group">
									<label class="label">Branch</label>
									<div class="rs-select2 js-select-simple select--no-search">
								<select id="sel_depart" name="sel_depart" required="">
											<option value="0">- Select -</option>
											<?php 
											// Fetch Department
											$sql_branch = "SELECT * FROM branch";
											$branch_data = mysqli_query($con,$sql_branch);
											while($row = mysqli_fetch_assoc($branch_data) ){
												$departid = $row['id']; 
												$depart_name = $row['branchname'];

												// Option
												echo "<option value='".$departid."'>".$depart_name."</option>";
											}
											?>
										</select>
										<div class="select-dropdown"></div>
									</div>
								</div>
							</div>
							<div class="col-2">
								<div class="input-group">
									<label class="label">Events</label>
									<div class="rs-select2 js-select-simple select--no-search">
										<select id="sel_user" name="sel_user" required="">
										<option value="0">- Select -</option>
										</select>
										<div class="select-dropdown"></div>
									</div>
								</div>
							</div>
							<div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" name="gender" value="M">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender" value="F">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
							<div class="col-2">
                                <div class="input-group">
                                    <label class="label">Accommodation</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Yes
                                            <input type="radio" name="accom" value="Yes" >
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">No
                                            <input type="radio" name="accom" value="No">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
							</fieldset><br>
							<fieldset>
							<legend>Team Member Details</legend>
                                <center><big>Fill Details according to your Event!!</big></center><br>
                                	<fieldset>
					<legend>Member 1 Details</legend>
							<div class="row row-space">
							<div class="col-2">
								<div class="input-group">
									<label> Name</label>
									<input type="text" name="tname1" class="input--style-4" value="" maxlength="50" >
									<span class="text-danger"><?php if (isset($tname1_error)) echo $tname1_error; ?></span>
								</div>
							</div>
							<div class="col-2">
								<div class="input-group">
									<label> Email</label>
									<input type="email" name="temail1" class="input--style-4" value="" maxlength="50" >
									<span class="text-danger"><?php if (isset($temail1_error)) echo $temail1_error; ?></span>
								</div>
							</div>
						</div>
						<div class="row row-space">
							<div class="col-2">
								<div class="input-group">
									<label>Mobile</label>
									<input type="text" name="tphno1" class="input--style-4" value="" maxlength="50" pattern="[1-9]{1}[0-9]{9}">
									<span class="text-danger"><?php if (isset($tphno1_error)) echo $tphno1_error; ?></span>
								</div>
							</div>
							<div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" name="tgender1" value="M">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="tgender1" value="F">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
							<div class="col-2">
                                <div class="input-group">
                                    <label class="label">Accommodation</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Yes
                                            <input type="radio" name="taccom1" value="Yes">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">No
                                            <input type="radio" name="taccom1" value="No">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
						</div>
                                </fieldset><br><br>
                                       	<fieldset>
					<legend>Member 2 Details</legend>
						<div class="row row-space">
							<div class="col-2">
								<div class="input-group">
									<label> Name</label>
									<input type="text" name="tname2" class="input--style-4" value="" maxlength="50" >
									<span class="text-danger"><?php if (isset($tname2_error)) echo $tname2_error; ?></span>
								</div>
							</div>
							<div class="col-2">
								<div class="input-group">
									<label> Email</label>
									<input type="email" name="temail2" class="input--style-4" value="" maxlength="50">
									<span class="text-danger"><?php if (isset($temail2_error)) echo $temail2_error; ?></span>
								</div>
							</div>
						</div>
						<div class="row row-space">
							<div class="col-2">
								<div class="input-group">
									<label> Mobile</label>
									<input type="text" name="tphno2" class="input--style-4" value="" maxlength="50"  pattern="[1-9]{1}[0-9]{9}">
									<span class="text-danger"><?php if (isset($tphno2_error)) echo $tphno2_error; ?></span>
								</div>
							</div>
							<div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" name="tgender2" value="M">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="tgender2" value="F">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
							<div class="col-2">
                                <div class="input-group">
                                    <label class="label"> Accommodation</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Yes
                                            <input type="radio" name="taccom2" value="Yes">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">No
                                            <input type="radio" name="taccom2" value="No">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
						</div>
                                </fieldset><br><br>
                                       	<fieldset>
					<legend>Member 3 Details</legend>
						<div class="row row-space">
							<div class="col-2">
								<div class="input-group">
									<label> Name</label>
									<input type="text" name="tname3" class="input--style-4" value="" maxlength="50" >
									<span class="text-danger"><?php if (isset($tname3_error)) echo $tname3_error; ?></span>
								</div>
							</div>
							<div class="col-2">
								<div class="input-group">
									<label> Email</label>
									<input type="email" name="temail3" class="input--style-4" value="" maxlength="50" >
									<span class="text-danger"><?php if (isset($temail3_error)) echo $temail3_error; ?></span>
								</div>
							</div>
						</div>
						<div class="row row-space">
							<div class="col-2">
								<div class="input-group">
									<label> Mobile</label>
									<input type="text" name="tphno3" class="input--style-4" value="" maxlength="50"  pattern="[1-9]{1}[0-9]{9}">
									<span class="text-danger"><?php if (isset($tphno3_error)) echo $tphno3_error; ?></span>
								</div>
							</div>
							<div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" name="tgender3" value="M">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="tgender3" value="F">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
							<div class="col-2">
                                <div class="input-group">
                                    <label class="label">Accommodation</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Yes
                                            <input type="radio" name="taccom3" value="Yes">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">No
                                            <input type="radio" name="taccom3" value="No">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
						</div>
                                </fieldset><br><br>
                                       	<fieldset>
					<legend>Member 4 Details</legend>
						<div class="row row-space">
							<div class="col-2">
								<div class="input-group">
									<label>Name</label>
									<input type="text" name="tname4" class="input--style-4" value="" maxlength="50" >
									<span class="text-danger"><?php if (isset($tname4_error)) echo $tname4_error; ?></span>
								</div>
							</div>
							<div class="col-2">
								<div class="input-group">
									<label>Email</label>
									<input type="email" name="temail4" class="input--style-4" value="" maxlength="50" >
									<span class="text-danger"><?php if (isset($temail4_error)) echo $temail4_error; ?></span>
								</div>
							</div>
						</div>
						<div class="row row-space">
							<div class="col-2">
								<div class="input-group">
									<label>Mobile</label>
									<input type="text" name="tphno4" class="input--style-4" value="" maxlength="50"  pattern="[1-9]{1}[0-9]{9}">
									<span class="text-danger"><?php if (isset($tphno4_error)) echo $tphno4_error; ?></span>
								</div>
							</div>
							<div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" name="tgender4" value="M">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="tgender4" value="F">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
							<div class="col-2">
                                <div class="input-group">
                                    <label class="label">Accommodation</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Yes
                                            <input type="radio" name="taccom4" value="Yes">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">No
                                            <input type="radio" name="taccom4" value="No">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
						</div>
                                </fieldset>
						
                              <div class="p-t-15"><br>
                            <p align="left"><button class="btn btn--radius-2 btn--blue" type="button" name="cancel" onclick="javascript:window.location='index.php';">Cancel</button>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <button class="btn btn--radius-2 btn--blue" type="submit" name="submit" value="submit" >Submit</button></p>
                            
						</div>
                                    
                             
                        </fieldset>
                       
					</form>
				</div>
			</div>    
		</div>
	</div>
<script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
</body>
</html>