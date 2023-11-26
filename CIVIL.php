<!-- PHP code to establish connection with the localserver -->
<?php

include "db.php";
// SQL query to select data from database
$sql = " SELECT * FROM coordinatordetails where branch='Civil' ";

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

  <title>Civil Events</title>
    
   
    
    
    
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
                                   
                                    <TD><img  align="center" src="assets/img/civilposter1.png">
								 </TD>
									
								</TR>
                                   
								</TABLE>
         
							
    
    
   
   </div>	
    
    
    <div>
        
        <TABLE>
								<TR>
                                    
                                    <TD width="75%" class="alert-success"> <a href=""><big>Department of Civil Engineering</big></a><br> 
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
             <div>  <td><h4 align="left">GEO WALL COMPETETION</h4>
            
            
            
            
          
            <div class="square">
    <div>
      <img  style="height:300px" src="assets/img/Geowall.png" height="300px" width="300px" align="left">
    </div>
              <big>Description</big>
     <p style="
      text-align: center;
      
    ">

                  The Geo Wall competition consists of designing and building a model mechanically
stabilized Earth (MSE) retaining wall, using paper reinforcement taped to a posterboard wall facing.. If
the wall does not fail catastrophically when the front panel is removed, the team will then proceed to load the
apparatus in 10 lb increments until failure occurs.</p>
            
            
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
											
                                                <img src="assets/img/geowallinfo2.png">
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
             <div>  <td><h4 align="left">SETHU NIRMAAN</h4>
            
            
            
            
          
            <div class="square">
    <div>
      <img style="height:250px" src="assets/img/sethunirman.png" height="300px" width="300px" align="left">
    </div>
              <big>Description</big>
     <p style="
      text-align: center;
      
    ">
                      There are many ways to build bridges, both real bridges and popsicle stick bridges. Do some
research, be creative, and remember - triangles are strong.
A triangle spreads out weight and is much more stable than a simple rectangle or square support. Be

sure to incorporate lots of triangles into your bridge design. More popsicle sticks doesn't necessarily
mean a stronger bridge.
In fact, according to the internet, If there is a single most important shape in engineering, it is the
triangle. Unlike a rectangle, a triangle cannot be deformed without changing the length of one of its
sides or breaking one of its joints. In fact, one of the simplest ways to strengthen a rectangle is to add
supports that form triangles at the rectangles corners or across its diagonal length. A single support
between two diagonal corners greatly strengthens a rectangle by turning it into two triangles.
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
											
                                                <img src="assets/img/sethunirmaninfo2.png"
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
             <div>  <td><h4 align="left">SLANT STRUCTURE
</h4>
            
            
            
            
          
            <div class="square">
    <div>
      <img src="assets/img/slant.png" height="300px" width="300px" align="left">
    </div>
     <p style="
      text-align: justify;
      font-size: 25px;
    ">
                
                 <dl><dt>Description</dt>

                     <dd>Card Boards, Foam Boards Should Be Used and The Structure
Should Be 2 To 3meters High. The Basement Should Be Strong Enough and Sides Supports Should
Not Be Allowed. The Structure Should Be Tilted.
</dd>
</dl></p>
            
            
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
											
                                                <img src="assets/img/slantinfo1.jpg"
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
             <div>  <td><h4 align="left">CAD MANIA

</h4>
            
            
            
            
          
            <div class="square">
    <div>
      <img style="height:250px" src="assets/img/cadmania.png"height="300px" width="300px" align="left">
    </div>
              <big>Description</big>
     <p style="
      text-align: center;
      
    ">

               DTo make the Civil Engineering student excited towards the marking of his own building plan layout
that he drafted by using AutoCAD . It gives practical idea on the planning and marking on the Site.We will provide specific site layout with dimensions and participant should completed the task of
         drafting and marking on Site as per requirements.</p>

            
            
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
											
                                                <img src="assets/img/cadmaniainfo2.png"
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
             <div>  <td><h4 align="left">ANVESHANAM


</h4>
            
            
            
            
          
            <div class="square">
    <div>
      <img  style="height:200px" src="assets/img/anveshana.png" height="800px" width="300px" align="left">
    </div>
               <big>Description</big>
     <p style="
      text-align: center;
      
    ">

                 Do you find decryption of puzzles fascinating? A heady race against time? A venturesome
experience track? Then this treasure hunt is something you would enjoy the most!Participants are supposed to discover the treasure spot using pure numerical and alphabetical data
provided. With the help of the decoded data, surveying principles and techniques, the participants
can reach the destination.
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
											
                                                <img src="assets/img/anveshanminfo2.png"
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
