<!-- PHP code to establish connection with the localserver -->
<?php

include "db.php";

// SQL query to select data from database
$sql = " SELECT * FROM coordinatordetails where branch='ECE' ";

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

  <title>ECE Events</title>
    

    
    
    
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
                                   
                                    <TD><img  align="center" src="assets/img/eceposter1.png">
								 </TD>
									
								</TR>
                                   
								</TABLE>
         
							
    
    
   
   </div>	
    
   
    
    
    <div>
        
        <TABLE>
								<TR>
                                    
                                    <TD width="75%" class="alert-success"> <a href=""><big>Department of Electronic and Communication Engineering</big></a><br> 
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
             <div>  <td><h4 align="left">Drone-Voyage</h4>
            
            
            
            
          
            <div class="square">
    <div>
      <img src="assets/img/Dronevoyage.png" height="300px" width="300px" align="left">
    </div>
  <p style="
      text-align: justify;
      font-size: 25px;
    ">
                
                 <dl><dt>Objective</dt>

                    <dd>The event aim is to build the drone according to the specifications and also to enhance the Self confidence and the Technical skills of the students towards innovative designs.</dd>
                    <dt>OUTCOME:</dt>
                    <dd>This event brings out the engineering & applicative skills in the contestants. Every single round aims at designing the drone to adapt the environment in different applications .In this event ,the contestant becomes technically sound & feels the fun of doing missions.</dd></dl></p>
            
            
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
											
                                                <img src="assets/img/droneinfo3.png">
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
             <div>  <td><h4 align="left">ROBO SOCCER</h4>
            
            
            
            
          
            <div class="square">
    <div>
      <img src="assets/img/Robosoccer.png" height="300px" width="300px" align="left">
    </div>
                 <dl><dt>Description</dt>
     <p style="
      text-align: center;
      
    ">
                
                

                      Hey guys its foot ball time …. Not the one with Ronaldo Vs Messi but it’s the one with your
ROBO Ronaldo Vs ROBO Messi. We as electronics engineers are going to present you the ROBO SOCCER
where you can step into the shoes of your favorite football player and show your skills of maneuvering your
BOT to score the goals. So if you are up for the challenge get your soccer playing Bots ready in order to
compete on the biggest stage and bring out the hidden soccer player in you. Participate and have lots of
fun…it’s going to be thrilling for sure…..enjoy the event!
                     </p></dl> 
            
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
											
                                                <img src="assets/img/robosoccerinfo3.png"
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
             <div>  <td><h4 align="left">Project-Expo
</h4>
            
            
            
            
          
            <div class="square">
    <div>
      <img src="assets/img/Projectexpo1.png" height="300px" width="300px" align="left">
    </div>
                 <dl><dt>Description</dt>
     <p style="
      text-align: center;
      
    ">

                     It is an excellent platform for students to mould their thoughts into an application by
exhibiting their innovative projects in a competitive environment where they can prove their
talent and creativity. Project Expo is a technical event in which the participants should
prepare their project at their college and they have to bring the project to demonstrate in
         presence of judges.</p></dl>

            
            
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
											
                                                <img src="assets/img/projectexpoinfo2.png"
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
             <div>  <td><h4 align="left">LabVIEW WHIZZ

</h4>
            
            
            
            
          
            <div class="square">
    <div>
      <img src="assets/img/Labview.png"height="300px" width="300px" align="left">
    </div>
                 <dl><dt>Description</dt>
     <p style="
      text-align: center;
      
    ">

               It is an excellent platform for students to show his/her design skills in LabVIEW.
                     </p></dl>
            
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
											
                                                <img src="assets/img/labviewinfo2.png"
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
             <div>  <td><h4 align="left">FOX HUNT


</h4>
            
            
            
            
          
            <div class="square">
    <div>
      <img  style="height:400px" src="assets/img/foxhunt.png" height="800px" width="300px" align="left">
    </div>
                  <dl><dt>Description</dt>
 “Fox Hunt” is a technical event which goes on the lines of traditional English activity of tracking and
chasing a fox by trained hound.As the participants, you should HUNT a hidden radio transmitter (the FOX)by using the
given receiver. The technical fun lies in finding the radio transmitter (FOX) which is situated in
an undisclosed location by using receiver. We test how good you are in the concepts and fast
finding.Apply your brains in concepts of COMMUNICATION and crack the event!!
The event is held in three rounds. <br><br>

                   <b>></b>
Ten Participants are shortlisted on the basics of communication theory as well as latest
trends and technologies in communications and their application in an aptitude round.
Participants are required to have basic idea on communication theory as well as present day
mobile communication technologies like GSM, 3G etc. to clear this round.

                         <br><b>&nbsp;&nbsp;&nbsp;&nbsp;></b>
This round involves in finding a hidden FOX (Radio transmitter) which is situated at a
fixed location by using receiver. Five participants are selected for Round 3 based on finding the
FOX in less time:
                           <br><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;></b>
In final round the participants are required to find the hunt a moving FOX (Radio transmitter). In
the given 30 minutes duration.
The Participants selected for Round 1 will be given a demo on how to use receiver to locate the
transmitter
The event is a fun filled process which involves real time application of theoretical concepts.
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
											
                                                <img src="assets/img/foxhuntinfo1.png"
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
                            
        
                               

<tr><td>6</td>
             <div>  <td><h4 align="left">Circuit Debugging and Black Box



</h4>
            
            
            
            
          
            <div class="square">
    <div>
      <img src="assets/img/Circuit.png" height="300px" width="300px" align="left">
    </div>
     <p style="
      text-align: justify;
      font-size: 25px;
    ">
                
                 <dl><dt>Description</dt>

                     <dd>1.The event tests the ability of participants to find errors in circuits and correct them so
that the required function is achieved.
<br>2.Participants are required to list out the errors in the circuits given to them and the
necessary corrections


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
											
                                                <img src="assets/img/circuitinfo2.png"
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
