<!-- PHP code to establish connection with the localserver -->
<?php

include "db.php";
// SQL query to select data from database
$sql = " SELECT * FROM coordinatordetails where branch='EEE' ";

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

  <title>EEE Events</title>
    
    
    
    
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
                                   
                                    <TD><img  align="center" src="assets/img/eeeposter1.png">
								 </TD>
									
								</TR>
                                   
								</TABLE>
         
							
    
    
   
   </div>	
    
    
    <div>
        
        <TABLE>
								<TR>
                                    
                                    <TD width="75%" class="alert-success"> <a href=""><big>Department of Electrical and Electronics Engineering</big></a><br> 
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
             <div>  <td><h4 align="left">FIKSU CAR</h4>
            
            
            
            
          
            <div class="square">
    <div>
      <img src="assets/img/fiksucarrr2.jpeg" height="300px" width="300px" align="left">
    </div>
              <big>Description</big>
     <p style="
      text-align: center;
      
    ">

                    The idea behind this event is to build a smart car which can be steered by the participants
(wireless control) and cross the obstacles in its path, avoid it and resume its running and reach
the final destination. In this event, the team has to demonstrate their design and perform the
         given tasks.</p>
            
            
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
											
                                                <img src="assets/img/fiksucarinfo2.png">
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
             <div>  <td><h4 align="left">RES_STORE – Circuit Realization Competition using Resistors</h4>
            
            
            
            
          
            <div class="square">
    <div>
      <img src="assets/img/restore2.png" height="300px" width="300px" align="left">
    </div>
               <big>Description</big>
     <p style="
      text-align: center;
      
    ">

                   It is an interesting hands-on event where we can evaluate the practical knowledge of
participants on circuits. In which the team members have to realize the circuits practically to get
specified output.
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
											
                                                <img src="assets/img/restoreinfo2.png"
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
             <div>  <td><h4 align="left">TECH-MOD – TECHNICAL MODEL PRESENTATION
</h4>
            
            
            
            
          
            <div class="square">
    <div>
      <img src="assets/img/techmod2.png" height="300px" width="300px" align="left">
    </div>
                <big>Description</big>
     <p style="
      text-align: center;
      
    ">

                    This is the place wherein the students can showcase the innovations emerged out
from their scientific knowledge in the form of trial products, laboratory test rigs, models or
simulated works respectively. Perhaps, it allows the young minds to work together with, learn
and observe from each other’s. Collective knowledge sharing will certainly bring the innovation
followed by implementation.
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
											
                                                <img src="assets/img/techmodinfo2.png"
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
             <div>  <td><h4 align="left">TREASURE HUNT

</h4>
            
            
            
            
          
            <div class="square">
    <div>
      <img src="assets/img/TreasureHunt.jpeg"height="300px" width="300px" align="left">
    </div>
              <big>Description</big>
     <p style="
      text-align: center;
      
    ">

                    In this game, the total participants are divided into 10 teams. There are 10 different paths
to find the treasure. Each team has to go through different paths decided on basis of a draw at
the beginning of the game. The treasure is the final destination of the game. All teams have to
find the treasure. The teams need to hunt the treasure. The treasure will be found by decoding
the clues. Each team has to decode 7 clues to find the treasure. One clue leads to another the
last one leads to the treasure.
It’s a teamwork game to find the treasure, players have to use their problem solving skills,
and decoding skills. The clues will be given as a puzzle or riddle related to the next clue. .
                         Each team may have 2 hours duration to find treasure.

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
											
                                                <img src="assets/img/treasurehunteeeinfo2.png"
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
             <div>  <td><h4 align="left">ARDUINO CODE CHALLENGE


</h4>
            
            
            
            
          
            <div class="square">
    <div>
      <img  style="height:400px" src="assets/img/arduinocodechallenge.png" height="800px" width="300px" align="left">
    </div>
                 <big>Description</big>
     <p style="
      text-align: center;
      
    ">
                    It is an interesting hands-on event where we can test the participants knowledge of
Arduino and its architecture, the use of LEDs, sensors, and other basic IoT components.
                  
Total 5 problem statements will be given to each team and team members are
supposed to collaborate and design circuits using Arduino UNO as the major component. Those
who will completed 3 circuits out of 5 they are eligible for round 2.
Two problem statements will be given to students and they have to crack atleast
one out of 2 in the given time.

One statement will be given and the team should complete it within the given
time.

                </p>
            
            
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
											
                                                <img src="assets/img/arduinoinfo2.png"
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
             <div>  <td><h4 align="left">Bussiness Minds



</h4>
            
            
            
            
          
            <div class="square">
    <div>
      <img  style="height:200px" src="assets/img/businessmindPOSTER.jpg" height="300px" width="300px" align="left">
    </div>
     <p style="
      text-align: justify;
      font-size: 25px;
    ">
                
                 <dl><dt>Description</dt>

                     <dd>• A team of 3 are invited<br>
• 30 BITS RELATED TO STOCK MARKET<br>
• EXAMPLES<br>
1. BSE FULL FORM………………….<br>
2. NSE FULL FORM………………….


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
											
                                                <img src="assets/img/businessinfo2.png"
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
