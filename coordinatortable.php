<!-- PHP code to establish connection with the localserver -->
<?php

include "db.php";

// SQL query to select data from database

$sql = " SELECT * FROM coordinatordetails where role='Faculty Coordinator'";
$sql1 = " SELECT * FROM coordinatordetails where role='Faculty Accommodation Coordinator'";
$sql2 = " SELECT * FROM coordinatordetails where role='Student Coordinator'";
$result = $mysqli->query($sql);
$result1 = $mysqli->query($sql1);
$result2 = $mysqli->query($sql2);
$mysqli->close();
?>
<!doctype html>
<html lang="en">

<head>
    <!--============================== Required meta tags ===========================-->

   

   

  <title>Coordinator Details</title>
    

    
    
    
</head>

<body>
<TABLE align="center">
    <tr rowspan=5><h2> Faculty Coordinator</h2></tr><br>
<TR><thead>

<th style="width:30%;">Name</th>
    <th style="width:20%;">Branch</th>
    <th style="width:20%;">Mobile Number</th>
    <th style="width:30%;">Mail Id</th>


   
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
			</tr>
     
			<?php
				}
			?>
  
    
   
                                    </TABLE>
                                    <br><br>
                                    
                                   <TABLE align="center">
                                       <tr rowspan=5><h2> Faculty Accommodation Coordinator</h2></tr><br>
<TR><thead>

<th style="width:">Name</th>
    <th style="width:">Branch</th>
    <th style="width:">Mobile Number</th>
    <th style="width:">Mail Id</th>


   
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
			</tr>
			<?php
				}
			?>
    
    

                                    </TABLE>
		
                                    <br><br>
                                   <TABLE align="center">
                                       <tr rowspan=5> <h2>Student Coordinator</h2></tr><br>
<TR><thead>

<th style="width:">Name</th>
    <th style="width:">Branch</th>
    <th style="width:">Mobile Number</th>
    <th style="width:">Mail Id</th>


   
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
			</tr>
			<?php
				}
			?>
                                    </TABLE>
</body>
</html>
