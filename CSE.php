<!-- PHP code to establish connection with the localserver -->
<?php

include "db.php";

// SQL query to select data from database
$sql = " SELECT * FROM coordinatordetails where branch!='ECE' AND branch!='EEE' AND branch!='Civil' AND branch!='Mech' AND role='Student Coordinator'";
$sql1 = " SELECT * FROM coordinatordetails where branch!='ECE' AND branch!='EEE' AND branch!='Civil' AND branch!='Mech' AND role='Faculty Coordinator'";
$sql2 = " SELECT * FROM coordinatordetails where branch!='ECE' AND branch!='EEE' AND branch!='Civil' AND branch!='Mech' AND role='Faculty Accommodation Coordinator'";
$result = $mysqli->query($sql);
$result1 = $mysqli->query($sql1);
$result2 = $mysqli->query($sql2);
$mysqli->close();
?>
<!doctype html>
<html lang="en">

<head>
    <!--============================== Required meta tags ===========================-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--============================= Fonts =======================================-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100i,300,300i,400,700" rel="stylesheet">

    <!--============================= CSS =======================================-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="assets/css/style1.css" rel="stylesheet">


    <script src="assets/js/jquery-3.2.1.slim.min.js"></script>

  <title>CSE Events</title>
    

    
    
    
</head>

<body>
    
    <!--================= Header-area ======================-->
    <div class="header-area header-absoulate">
        <div class="container">
            <div class="row">
               
    <!--================== Main menu-area ====================-->
                <div class="col-md-7">
                    <div class="main-menu">
                       
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!--======================= Slide-area =======================-->
   
    
    
    
<div  >
								<TABLE>
								 <?php include('header.php'); ?>
                                    <TR>
                                   
                                    <TD><img  align="center" src="images/cseposter1.png">
								 </TD>
									
								</TR>
                                   
								</TABLE>
         
							
    
    
   
   </div>	
    
   
    
    
    <div>
        
        <TABLE>
								<TR>
                                    
                                    <TD width="75%" class="alert-success"> <a href=""><big> School of Computing</big> <br> (CSE,IT,AI&DS,AI&ML,CSBS)</a><br> 
                                    
								 </TD>
									
								</TR>
                                    
                                   
								</TABLE>
      

        </div>


			
    
    
<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container">

				<div class="container">
					<div class="row">

                     
						
							
							<div class="row">
								<div class="col-md-12">
<style>
img.floatRightClear { 
    float: left; 
    clear: left; 
    margin: 14px; 
}
</style>
                                    
                                                                 
                                    
                                    
                                    <TABLE >
    <tr rowspan=5> Student Coordinator</tr>
<TR><thead>

<th style="width:30%;">Name</th>
    <th style="width:20%;">Branch</th>
    <th style="width:20%;">Mobile Number</th>
    <th style="width:30%;">Mail Id</th>
    <th style="width:30%;">Role</th>


   
</thead>
</TR>
    
		<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
   
			<tr>
                
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				
				<td style="width:30%;"><?php echo $rows['name'];?></td>
				<td style="width:20%;"><?php echo $rows['branch'];?></td>
				<td style="width:20%;"><?php echo $rows['phone'];?></td>
                <td style="width:30%;"><?php echo $rows['mailid'];?></td>
                <td style="width:30%;"><?php echo $rows['role'];?></td>
			</tr>
     
			<?php
				}
			?>
  
    
   
                                    </TABLE>
                                    
                                    
                                    <TABLE >
    <tr rowspan=5> Faculty Coordinator</tr>
<TR><thead>

<th style="width:">Name</th>
    <th style="width:">Branch</th>
    <th style="width:">Mobile Number</th>
    <th style="width:">Mail Id</th>
    <th style="width:">Role</th>


   
</thead>
</TR>
   
  
    
    <?php
				// LOOP TILL END OF DATA
				while($rows=$result1->fetch_assoc())
				{
			?>
			<tr>
                
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				
				<td style="width:30%;"><?php echo $rows['name'];?></td>
				<td style="width:20%;"><?php echo $rows['branch'];?></td>
				<td style="width:20%;"><?php echo $rows['phone'];?></td>
                <td style="width:30%;"><?php echo $rows['mailid'];?></td>
                <td style="width:30%;"><?php echo $rows['role'];?></td>
			</tr>
			<?php
				}
			?>
    
    

                                    </TABLE>
		
                                    
                                    <TABLE>
    <tr rowspan=5> Faculty Accommodation Coordinator</tr>
<TR><thead>

<th style="width:">Name</th>
    <th style="width:">Branch</th>
    <th style="width:">Mobile Number</th>
    <th style="width:">Mail Id</th>
    <th style="width:">Role</th>


   
</thead>
</TR>
    
		
  
    
   
    
    
    <?php
				// LOOP TILL END OF DATA
				while($rows=$result2->fetch_assoc())
				{
			?>
			<tr>
                
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				
				<td style="width:30%;"><?php echo $rows['name'];?></td>
				<td style="width:20%;"><?php echo $rows['branch'];?></td>
				<td style="width:20%;"><?php echo $rows['phone'];?></td>
                <td style="width:30%;"><?php echo $rows['mailid'];?></td>
                <td style="width:30%;"><?php echo $rows['role'];?></td>
			</tr>
			<?php
				}
			?>
                                    </TABLE>
		


<TABLE class="table table-striped">
<TR><thead>
<th style="width:5%">S.No.</th>
<th style="width:">Event</th>


   
</thead>
</TR>
		<tr><td>1</td>
             <div>  <td><h4 align="left">Software Code Optimization</h4>
            
            
            
            
          
            <div class="square">
    <div>
      <img src="assets/img/CodeRevitalize.jpg" height="300px" width="300px" align="left">
    </div>
  <p style="
      text-align: justify;
      font-size: 25px;
    ">
                
                 <dl><dt>Description</dt>

                    <dd>Students will be given a chunk of code. Student have to optimize it to the extent possible.</dd>
                    
                    </dl></p>
            
            
            <div class="row">
								<div class="col-md-6">
																	
									<h4>
									<a class="btn btn-white more" data-toggle="modal" data-target="#myModal1">More Details <i class="pl-10 fa fa-info"></i></a> </h4>
								
								<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<!-- <h4 class="modal-title" id="myModalLabel">Vishnu Institute of Technology, Bhimavaram</h4> -->
											</div>
											<div class="modal-body">
											
                                                <img src="assets/img/softwarecodeinfo2.png">
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><i class="icon-check"></i>Ok</button>
											</div>
										</div>
									</div>
								</div>
							</div>
                </div>
                
                
                <div class="col-md-6">
																	
									<h4 style="padding-right:5%">
									<a class="btn btn-white more" href="Register.php">Register </a> </h4>
								
								
                </div>
                
                </div>
                
                </div>
            
            
           
           </td></tr> </div>
                            
                            
                            
                            
                    		<tr><td>2</td>
             <div>  <td><h4 align="left">Code Hunt</h4>
            
            
            
            
          
            <div class="square">
    <div>
      <img src="assets/img/codehuntlogo1.png" height="300px" width="300px" align="left">
    </div>
                <dl><dt>Description</dt>
     <p style="
      text-align: center;
      
    ">
                
                 

                Code Hunt is a technical event which is similar to treasure hunt but the clues are to be coded to get the next clue. 
The theme of the event is to investigate and solve the biggest scam/crime ever happened in India. The participants are provided with access to the virtual crime scene and also the first clue to solve the crime. The given clue can be a simple coding question with a input to be provided or a code that need to be debugged etc. solving the first clue will lead to the second one and solving that will lead to the next and so on. One who solves the last clue and revels the suspect will be declared as winner.</p>

                </dl>
            
            
                       <div class="row">
								<div class="col-md-6">
																	
									<h4>
									<a class="btn btn-white more" data-toggle="modal" data-target="#myModal2">More Details <i class="pl-10 fa fa-info"></i></a> </h4>
								
								<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<!-- <h4 class="modal-title" id="myModalLabel">Vishnu Institute of Technology, Bhimavaram</h4> -->
											</div>
											<div class="modal-body"> 
											
                                                <img src="assets/img/codehuntinfocse.png"
                                                     >
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><i class="icon-check"></i> Ok</button>
											</div>
										</div>
									</div>
								</div>
							</div>
                </div>
                
                
                <div class="col-md-6">
																	
									<h4 style="padding-right:5%">
									<a class="btn btn-white more" href="Register.php">Register </a> </h4>
								
								
                </div>
                
                </div>
                
                </div>
            
            
           
           </td></tr> </div>
                
                
                
                
                <tr><td>3</td>
             <div>  <td><h4 align="left">Bug Bounty
</h4>
            
            
            
            
          
            <div class="square">
    <div>
      <img src="assets/img/bugbounty.jpg" height="300px" width="300px" align="left">
    </div>
                 <dl><dt>Description</dt>
     <p style="
      text-align: center;
      
    ">
                
                

                     Bug Bounty is a technical event to provide an opportunity for bug hunters who are very much enthusiastic to identify bugs and rectify them. The bug hunters can participate as a team or individually who will be provided with a code consisting of bugs. They need to identify the bugs and rectify the code such that no errors will occur while executing the code. Wow, that’s incredible! If you participate in the event. </p>

</dl>
            
            
                       <div class="row">
								<div class="col-md-6">
																	
									<h4>
									<a class="btn btn-white more" data-toggle="modal" data-target="#myModal3">More Details <i class="pl-10 fa fa-info"></i></a> </h4>
								
								<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<!-- <h4 class="modal-title" id="myModalLabel">Vishnu Institute of Technology, Bhimavaram</h4> -->
											</div>
											<div class="modal-body"> 
											
                                                <img src="assets/img/bugbountyinfo2.png"
                                                     >
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><i class="icon-check"></i> Ok</button>
											</div>
										</div>
									</div>
								</div>
							</div>
                </div>
                
                
                <div class="col-md-6">
																	
									<h4 style="padding-right:5%">
									<a class="btn btn-white more" href="Register.php">Register </a> </h4>
								
								
                </div>
                
                </div>
                
                </div>
            
            
           
           </td></tr> </div>
                            



<tr><td>4</td>
             <div>  <td><h4 align="left">Hackathon (School of Computing)

</h4>
            
            
            
            
          
            <div class="square">
    <div>
      <img src="assets/img/sentithon.png"height="300px" width="300px" align="left">
    </div>
                
     <dl><dt>Description</dt>
     <p style="
      text-align: center;
      
    ">
                
                

                  Social media posts are playing a vital role in the human conversation and behavioral analysis these days. The main objective of this hackthon is to find the feelings of the Indian people on recent happenings in India.
</p>
</dl>
            
            
                       <div class="row">
								<div class="col-md-6">
																	
									<h4>
									<a class="btn btn-white more" data-toggle="modal" data-target="#myModal4">More Details <i class="pl-10 fa fa-info"></i></a> </h4>
								
								<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<!-- <h4 class="modal-title" id="myModalLabel">Vishnu Institute of Technology, Bhimavaram</h4> -->
											</div>
											<div class="modal-body"> 
											
                                                <img src="assets/img/hackathoninfo2.png"
                                                     >
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><i class="icon-check"></i> Ok</button>
											</div>
										</div>
									</div>
								</div>
							</div>
                </div>
                
                
                <div class="col-md-6">
																	
									<h4 style="padding-right:5%"><br>
                                       
                                       <blink class="blink" >Registration closed for this Event!!</blink> </h4>
								
								
                </div>
                
                </div>
                
                </div>
            
            
           
           </td></tr> </div>
                            
        


<tr><td>5</td>
             <div>  <td><h4 align="left">Code Chaser


</h4>
            
            
            
            
          
            <div class="square">
    <div>
      <img  style="height:200px" src="assets/img/codechaser.jpg" height="800px" width="300px" align="left">
    </div>
   <dl><dt>Description</dt>
     <p style="
      text-align: center;
      
    ">

         It's a time based coding competition. It is a inidividual event in which each individual will be provided with set of problems which he needs to solve in a specified amount of time. We will  have 3 rounds. Each round is an elimination round. Each round is time bound. The one who finishes quickly will be the code chaser.</p>

</dl>
            
            
                       <div class="row">
								<div class="col-md-6">
																	
									<h4>
									<a class="btn btn-white more" data-toggle="modal" data-target="#myModal5">More Details <i class="pl-10 fa fa-info"></i></a> </h4>
								
								<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<!-- <h4 class="modal-title" id="myModalLabel">Vishnu Institute of Technology, Bhimavaram</h4> -->
											</div>
											<div class="modal-body"> 
											
                                                <img src="assets/img/codechaserinfo2.png"
                                                     >
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><i class="icon-check"></i> Ok</button>
											</div>
										</div>
									</div>
								</div>
							</div>
                </div>
                
                
                <div class="col-md-6">
																	
									<h4 style="padding-right:5%">
									<a class="btn btn-white more" href="Register.php">Register</a> </h4>
								
								
                </div>
                
                </div>
                
                </div>
            
            
           
           </td></tr> </div>
                            
        
                               

<tr><td>6</td>
             <div>  <td><h4 align="left">DATATHON



</h4>
            
            
            
            
          
            <div class="square">
    <div>
      <img style="height:200px" src="assets/img/datathon.jpg" height="300px" width="300px" align="left">
    </div>
     <p style="
      text-align: justify;
      font-size: 25px;
    ">
                
                 <dl><dt>Description</dt>

                     <dd>Students (in teams) need to create a machine learning model with good accuracy .


</dd>
</dl></p>
            
            
                       <div class="row">
								<div class="col-md-6">
																	
									<h4 style="right:75px">
									<a class="btn btn-white more" data-toggle="modal" data-target="#myModal6">More Details <i class="pl-10 fa fa-info"></i></a> </h4>
								
								<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<!-- <h4 class="modal-title" id="myModalLabel">Vishnu Institute of Technology, Bhimavaram</h4> -->
											</div>
											<div class="modal-body"> 
											
                                                <img src="assets/img/dathathoninfo3.png"
                                                     >
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><i class="icon-check"></i> Ok</button>
											</div>
										</div>
									</div>
								</div>
							</div>
                </div>
                
                
                <div class="col-md-6">
																	
									<h4 style="padding-right:5%">
									<a class="btn btn-white more" href="Register.php">Register</a> </h4>
								
								
                </div>
                
                </div>
                
                </div>
            
            
           
           </td></tr> </div>



<tr><td>7</td>
             <div>  <td><h4 align="left">QR Hunt


</h4>
            
            
            
            
          
            <div class="square">
    <div>
      <img style="height:250px" src="assets/img/qrhunt.jpg" height="800px" width="300px" align="left">
    </div>
      <dl><dt>Description</dt>
     <p style="
      text-align: center;
      
    ">


                QR Hunt is like treasure hunt, the idea of hunting for hidden treasures has always been exciting and adventurous. In treasure hunt, participants work in small teams to find the treasure with the help of given clues. The clues are given in the form of QR Code. The team who decodes the clue and finds the treasure first will win the game. In this digital era, treasure hunt games are organized online with the use of websites and social media handles here we want to use QR Codes.
          </p>
</dl>
            
            
                       <div class="row">
								<div class="col-md-6">
																	
									<h4>
									<a class="btn btn-white more" data-toggle="modal" data-target="#myModal7">More Details <i class="pl-10 fa fa-info"></i></a> </h4>
								
								<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<!-- <h4 class="modal-title" id="myModalLabel">Vishnu Institute of Technology, Bhimavaram</h4> -->
											</div>
											<div class="modal-body"> 
											
                                                <img src="assets/img/qrhuntinfo3.png"
                                                     >
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><i class="icon-check"></i> Ok</button>
											</div>
										</div>
									</div>
								</div>
							</div>
                </div>
                
                
                <div class="col-md-6">
																	
									<h4 style="padding-right:5%"><br>
									 <blink class="blink" >Registration closed for this Event!!</blink> </h4>
								
								
                </div>
                
                </div>
                
                </div>
            
            
           
           </td></tr> </div>


<tr><td>8</td>
             <div>  <td><h4 align="left">Idea Presentation   


</h4>
            
            
            
            
          
            <div class="square">
    <div>
      <img  style="height:300px" src="assets/img/ideathon.jpg" height="800px" width="300px" align="left">
    </div>
    <dl><dt>Description</dt>
     <p style="
      text-align: center;
      
    ">


                 The event is aimed at hunting/searching for bright minds with the out-of-box critical thinking approach to generate a real time solutions for the problems faced by the society and the Nation. It is an initiative to provide students a platform to solve some of the pressing problems we face in our daily lives, and thus inculcate a culture of product innovation and a mindset of problem solving.
        </p>
                </dl>
            
            
                       <div class="row">
								<div class="col-md-6">
																	
									<h4>
									<a class="btn btn-white more" data-toggle="modal" data-target="#myModal8">More Details <i class="pl-10 fa fa-info"></i></a> </h4>
								
								<div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<!-- <h4 class="modal-title" id="myModalLabel">Vishnu Institute of Technology, Bhimavaram</h4> -->
											</div>
											<div class="modal-body"> 
											
                                                <img src="assets/img/ideapresentationinfo2.png"
                                                     >
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><i class="icon-check"></i> Ok</button>
											</div>
										</div>
									</div>
								</div>
							</div>
                </div>
                
                
                <div class="col-md-6">
																	
									<h4 style="padding-right:5%">
									<a class="btn btn-white more" href="Register.php">Register</a> </h4>
								
								
                </div>
                
                </div>
                
                </div>
            
            
           
           </td></tr> </div>



<tr><td>9</td>
             <div>  <td><h4 align="left">Relay Coding


</h4>
            
            
            
            
          
            <div class="square">
    <div>
      <img  style="height:300px" src="assets/img/relaycoding.jpg" height="800px" width="300px" align="left">
    </div>
    <dl><dt>Description</dt>
     <p style="
      text-align: center;
      
    ">


                    The event aims at improving the programming 
skills of the Students. How well the students can 
understand the program at any stage of 
development can be measured by this Event. 
        </p></dl>
            
            
                       <div class="row">
								<div class="col-md-6">
																	
									<h4>
									<a class="btn btn-white more" data-toggle="modal" data-target="#myModal9">More Details <i class="pl-10 fa fa-info"></i></a> </h4>
								
								<div class="modal fade" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<!-- <h4 class="modal-title" id="myModalLabel">Vishnu Institute of Technology, Bhimavaram</h4> -->
											</div>
											<div class="modal-body"> 
											
                                                <img src="assets/img/relaycodinginfo3.png"
                                                     >
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><i class="icon-check"></i> Ok</button>
											</div>
										</div>
									</div>
								</div>
							</div>
                </div>
                
                
                <div class="col-md-6">
																	
									<h4 style="padding-right:5%">
									<a class="btn btn-white more" href="Register.php">Register</a> </h4>
								
								
                </div>
                
                </div>
                
                </div>
            
            
           
           </td></tr> </div>




<tr><td>10</td>
             <div>  <td><h4 align="left">Break the Query


</h4>
            
            
            
            
          
            <div class="square">
    <div>
      <img  style="height:300px" src="assets/img/breakthequery.jpg" height="800px" width="300px" align="left">
    </div>
     <p style="
      text-align: justify;
      font-size: 25px;
    ">
                
                 <dl><dt>Description</dt>

                     <dd>This event is set to test the 
abilities of the students regarding 
the suject "Database management systems"
Students are given tables residing in 
database and were asked to write 
query to get a desired output. Those
who succeeds in forming the query wins 
</dd>
</dl></p>
            
            
                       <div class="row">
								<div class="col-md-6">
																	
									<h4>
									<a class="btn btn-white more" data-toggle="modal" data-target="#myModal10">More Details <i class="pl-10 fa fa-info"></i></a> </h4>
								
								<div class="modal fade" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<!-- <h4 class="modal-title" id="myModalLabel">Vishnu Institute of Technology, Bhimavaram</h4> -->
											</div>
											<div class="modal-body"> 
											
                                                <img src="assets/img/breakthequeryinfo2.png"
                                                     >
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><i class="icon-check"></i> Ok</button>
											</div>
										</div>
									</div>
								</div>
							</div>
                </div>
                
                
                <div class="col-md-6">
																	
									<h4 style="padding-right:5%">
									<a class="btn btn-white more" href="Register.php">Register</a> </h4>
								
								
                </div>
                
                </div>
                
                </div>
            
            
           
           </td></tr> </div>




<tr><td>11</td>
             <div>  <td><h4 align="left">Blind Coding


</h4>
            
            
            
            
          
            <div class="square">
    <div>
      <img  style="height:300px" src="assets/img/blindcoding.png" height="800px" width="300px" align="left">
    </div>
     <p style="
      text-align: justify;
      font-size: 25px;
    ">
                
                 <dl><dt>Description</dt>

                     <dd>This event aims at testing the programming 
skills of the students.
</dd>
</dl></p>
            
            
                       <div class="row">
								<div class="col-md-6">
																	
									<h4>
									<a class="btn btn-white more" data-toggle="modal" data-target="#myModal11">More Details <i class="pl-10 fa fa-info"></i></a> </h4>
								
								<div class="modal fade" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<!-- <h4 class="modal-title" id="myModalLabel">Vishnu Institute of Technology, Bhimavaram</h4> -->
											</div>
											<div class="modal-body"> 
											
                                                <img src="assets/img/blindcodinginfo3.png"
                                                     >
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><i class="icon-check"></i> Ok</button>
											</div>
										</div>
									</div>
								</div>
							</div>
                </div>
                
                
                <div class="col-md-6">
																	
									<h4 style="padding-right:5%">
									<a class="btn btn-white more" href="Register.php">Register</a> </h4>
								
								
                </div>
                
                </div>
                
                </div>
            
            
           
           </td></tr> </div>




<tr><td>12</td>
             <div>  <td><h4 align="left">Jumbled Code

</h4>
            
            
            
            
          
            <div class="square">
    <div>
      <img  style="height:300px" src="assets/img/jumblecoding.jpg" height="800px" width="300px" align="left">
    </div>
     <p style="
      text-align: justify;
      font-size: 25px;
    ">
                
                 <dl><dt>Description</dt>

                     <dd>This event aims at testing the programming skills 
of the students when the code is jumbled or
re-arranged.
</dd>
</dl></p>
            
            
                       <div class="row">
								<div class="col-md-6">
																	
									<h4>
									<a class="btn btn-white more" data-toggle="modal" data-target="#myModal12">More Details <i class="pl-10 fa fa-info"></i></a> </h4>
								
								<div class="modal fade" id="myModal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<!-- <h4 class="modal-title" id="myModalLabel">Vishnu Institute of Technology, Bhimavaram</h4> -->
											</div>
											<div class="modal-body"> 
											
                                                <img src="assets/img/jumbledcodeinfo4.png"
                                                     >
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><i class="icon-check"></i> Ok</button>
											</div>
										</div>
									</div>
								</div>
							</div>
                </div>
                
                
                <div class="col-md-6">
																	
									<h4 style="padding-right:5%">
									<a class="btn btn-white more" href="Register.php">Register</a> </h4>
								
								
                </div>
                
                </div>
                
                </div>
            
            
           
           </td></tr> </div>




<tr><td>13</td>
             <div>  <td><h4 align="left">Virtual DeepRacer League


</h4>
            
            
            
            
          
            <div class="square">
    <div>
      <img  style="height:300px" src="assets/img/deepracer.png" height="800px" width="300px" align="left">
    </div>
   <dl><dt>Description</dt>
     <p style="
      text-align: center;
      
    ">

                   Participants have to build virtual race car driven by reinforcement learning and test its performance on the track in the AWS DeepRacer 3D racing simulator.  Participants can build model by passing parameters to the default builtin functions of reinforcement learning model. They can also create their own optimum reinforcement learning model.


       </p>
                </dl>
            
                       <div class="row">
								<div class="col-md-6">
																	
									<h4>
									<a class="btn btn-white more" data-toggle="modal" data-target="#myModal13">More Details <i class="pl-10 fa fa-info"></i></a> </h4>
								
								<div class="modal fade" id="myModal13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<!-- <h4 class="modal-title" id="myModalLabel">Vishnu Institute of Technology, Bhimavaram</h4> -->
											</div>
											<div class="modal-body"> 
											
                                                <img src="assets/img/virtualinfo4.png"
                                                     >
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><i class="icon-check"></i> Ok</button>
											</div>
										</div>
									</div>
								</div>
							</div>
                </div>
                
                
                <div class="col-md-6">
																	
									<h4 style="padding-right:5%">
									<a class="btn btn-white more" href="Register.php">Register</a> </h4>
								
								
                </div>
                
                </div>
                
                </div>
            
            
           
           </td></tr> </div>






<tr><td>14</td>
             <div>  <td><h4 align="left">Web Dev Mastery


</h4>
            
            
            
            
          
            <div class="square">
    <div>
      <img  style="height:300px" src="assets/img/webdev.png" height="800px" width="300px" align="left">
    </div>
      <dl><dt>Description</dt>
     <p style="
      text-align: center;
      
    ">


                     This event is designed to assess
the abilities of the particpants
regading the ongoing trends in web 
developement. Particiants have to
showcase their abilities in designing a
website, elements or a design using 
HTML, CSS, Javascript and other frameworks
          </p></dl>
            
            
                       <div class="row">
								<div class="col-md-6">
																	
									<h4>
									<a class="btn btn-white more" data-toggle="modal" data-target="#myModal14">More Details <i class="pl-10 fa fa-info"></i></a> </h4>
								
								<div class="modal fade" id="myModal14" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<!-- <h4 class="modal-title" id="myModalLabel">Vishnu Institute of Technology, Bhimavaram</h4> -->
											</div>
											<div class="modal-body"> 
											
                                                <img src="assets/img/webdevinfo2.png"
                                                     >
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><i class="icon-check"></i> Ok</button>
											</div>
										</div>
									</div>
								</div>
							</div>
                </div>
                
                
                <div class="col-md-6">
																	
									<h4 style="padding-right:5%">
									<a class="btn btn-white more" href="Register.php">Register</a> </h4>
								
								
                </div>
                
                </div>
                
                </div>

            
           
           </td></tr> </div>


<tr><td>15</td>
             <div>  <td><h4 align="left">Tech Lead


</h4>
            
            
            
            
          
            <div class="square">
    <div>
      <img  style="height:300px" src="assets/img/Enterpriselogo.png" height="800px" width="300px" align="left">
    </div>
      <dl><dt>Description</dt>
     <p style="
      text-align: center;
      
    ">


                     It is to assess the capability of participants in technical and managerial aspects.
          </p></dl>
            
            
                       <div class="row">
								<div class="col-md-6">
																	
									<h4>
									<a class="btn btn-white more" data-toggle="modal" data-target="#myModal15">More Details <i class="pl-10 fa fa-info"></i></a> </h4>
								
								<div class="modal fade" id="myModal15" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<!-- <h4 class="modal-title" id="myModalLabel">Vishnu Institute of Technology, Bhimavaram</h4> -->
											</div>
											<div class="modal-body"> 
											
                                                <img src="assets/img/enterpriseinfo.png"
                                                     >
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><i class="icon-check"></i> Ok</button>
											</div>
										</div>
									</div>
								</div>
							</div>
                </div>
                
                
                <div class="col-md-6">
																	
									<h4 style="padding-right:5%">
									<a class="btn btn-white more" href="Register.php">Register</a> </h4>
								
								
                </div>
                
                </div>
                
                </div>

            
           
           </td></tr> </div>










                            

    
    
		   	  </table>
								</div>

							</div>
							<hr>
						</div>
						<!-- main end -->	</div>	  </div>

						


						</section>

	


   
    
    
    
    

    <!--========================== Footer-area ===============================-->
    
     <?php include('footer.php'); ?>
    
    			


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="assets/js/popper-1.12.9.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
