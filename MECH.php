<!-- PHP code to establish connection with the localserver -->
<?php

include "db.php";

// SQL query to select data from database
$sql = " SELECT * FROM coordinatordetails where branch='Mech' ";

$result = $mysqli->query($sql);

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

  <title>Mech Events</title>
    
   
    
    
    
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
                                   
                                    <TD><img  align="center" src="assets/img/mechposter.png">
								 </TD>
									
								</TR>
                                   
								</TABLE>
         
							
    
    
   
   </div>	
    
    
     <div>
        
        <TABLE>
								<TR>
                                    
                                    <TD width="75%" class="alert-success"> <a href=""><big>Department of Mechanical Engineering</big></a><br> 
								 </TD>
									
								</TR>
                                    
                                   
								</TABLE>
        
     
        
        </div>

			
    
    
<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container">

				<div class="container">
					<div class="row">

						<!-- main start -->
						<!-- ================ -->
						
							
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
   <tr rowspan=5>Coordinator Details</tr>
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
                                    
		

<TABLE class="table table-striped">
<TR><thead>
<th style="width:5%">S.No.</th>
<th style="width:">Event</th>


   
</thead>
</TR>
		<tr><td>1</td>
             <div>  <td><h4 align="left">VISHNU ROBO RACE</h4>
            
            
            
            
          
            <div class="square">
    <div>
      <img  style="height:300px" src="assets/img/Roborace.png" height="300px" width="300px" align="left">
    </div>
              <big>Description</big>
     <p style="
      text-align: center;
      
    ">

                 The challenge is to build your own robot either wired/wireless within the specified
dimensions in order to achieve the maximum speed to beat other robots on the given
track and reach the finishing line in minimum time. The robot must run on the given
racetrack. The robot must start behind the starting mark and is considered to have
crossed the finishing line if any part of the robot crosses it when the robot has
completed a full lap of the course. Your robot must be manually/autonomously
controlled, and it should be capable of traversing over different terrain and hurdles
without going outside the track. Separate points will be awarded for overcoming the
hurdles. The bot with the maximum cumulative points will win the race. The
competition area has a special place defined for the robot’s operation.
An individual may participate or construct a team of a minimum of 2 and a maximum of
4 members. Any institution or group of students may form a team.</p>
            
            
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
											
                                                <img src="assets/img/roboraceinfo3.png">
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
             <div>  <td><h4 align="left">PROJECT EXPO</h4>
            
            
            
            
          
            <div class="square">
    <div>
      <img style="height:200px" src="assets/img/projectexpo.png" height="300px" width="300px" align="left">
    </div>
                 <big>Description</big>
     <p style="
      text-align: center;
      
    ">

                     <dd> Project Expo is a technical project competition. Students are getting a platform to
demonstrate their vibrant thoughts by creating their imagination into real life model.
They will be able to display their solicitous support to the development of our society.
The variances in the idea will enhance their thought to broader way. This Project Expo
will motivate the students to a whole new level as they exhibit their projects to other
students, representatives from Institutes etc. getting their views, reviews and
appreciations.
                </p>
            
            
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
											
                                                <img src="assets/img/projectexpoinfoo2.png"
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
             <div>  <td><h4 align="left">EV DESIGN WORKSHOP
</h4>
            
            
            
            
          
            <div class="square">
    <div>
      <img src="assets/img/EVdesign.png" height="300px" width="300px" align="left">
    </div>
               <big>Description</big>
     <p style="
      text-align: center;
      
    ">

                   Electric vehicles are currently the dominant technologies in the new generation of
automobiles. This course examines the newest major sub-systems of hybrid and
electrified vehicles— including the engine—as well as the integration of these sub-
systems into the vehicle as a whole. Students will complete a final project of their choice
on a topic related to hybrid and electric vehicles. The course covers the introduction to
modelling, analysis and control of vehicles with electrified propulsion systems,
including electric vehicles, plug-in and fuel cell vehicles. The course will introduce
students to the concepts and terminology, state-of-the-art developments, energy
conversion and storage options, modelling, analysis, system integration and basic
principles of vehicle controls.
</p>
            
            
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
											
                                                <img src="assets/img/evdesigninfo2.png"
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
             <div>  <td><h4 align="left">BRAHMOS

</h4>
            
            
            
            
          
            <div class="square">
    <div>
      <img style="height:250px" src="assets/img/Brahmos.png"height="300px" width="300px" align="left">
    </div>
              <big>Description</big>
     <p style="
      text-align: center;
      
    ">

                 Design a water rocket that is completely powered by the thrust delivered by water
expelled at high pressure along with its launch pad. Water Rocket is a mechanical event
that involves the fabrication of a rocket whose fuel/thrust for flight is obtained by the
use of water that is expelled at a large air pressure. It is an example of Newton's third
law of motion. The pre requisites for such an event would be a basic knowledge of
fabrication, materials and physical calculations involving thrust, air pressure, etc. The
event tests a couple of aspects of the Rocket’s flight. These include range and accuracy
of the launching mechanism.
</p>
            
            
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
											
                                                <img src="assets/img/brahmosinfo2.png"
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
                            
        


<tr><td>5</td>
             <div>  <td><h4 align="left">AUTOMOBILE MODELLING


</h4>
            
            
            
            
          
            <div class="square">
    <div>
      <img  style="height:200px" src="assets/img/automobile.png" height="800px" width="300px" align="left">
    </div>
     <p style="
      text-align: justify;
      font-size: 25px;
    ">
                
                 <dl><dt>Description</dt>

                     <dd>AUTOMOBILE MODELING is a platform for students to present their 3D CAD
Modeling skills. In this event, students are supposed to create a 3d model of Automobile
part(s) from given sketches within a limited time of 2 hrs. Assembly may also be a part
of this competition. CATIA is the preferred software, however, students who are
interested in using other software can also participate.
</dd>
</dl></p>
            
            
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
											
                                                <img src="assets/img/automobileinfo2.png"
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
             <div>  <td><h4 align="left">TREASURE HUNT



</h4>
            
            
            
            
          
            <div class="square">
    <div>
      <img src="assets/img/treasurehunt.png" height="300px" width="300px" align="left">
    </div>
               <big>Description</big>
     <p style="
      text-align: center;
      
    ">Treasure hunt, the idea of hunting for hidden treasures has always been exciting and
adventurous. In treasure hunt, participants work in small teams to find the treasure
with the help of given clues. The team who decodes the clue and finds the treasure
first will win the game. The game of treasure hunt comes from the concept of
scavenger hunting where participants have to find number of items from the list
provided to them. Treasure hunt differentiates itself from scavenger hunting by
providing given clues to find the treasure. The first Internet scavenger hunt was
organized by Rick Gates in 1992. Since Vishnu Institute of Technology, Department of
Mechanical Engineering is organizing this event, therefore the clues will be given
based on general science.

                </p>
            
            
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
											
                                                <img src="assets/img/treasurehuntttinfo2.png"
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
