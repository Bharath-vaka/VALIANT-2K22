<?php
include("../../db.php");
?>

<!doctype html>
<html>

<head>
    <title>VALIANT 2K22 DATA</title>
    <!-- Datatable CSS -->
    <link href='DataTables/datatables.min.css' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' href='https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- jQuery Library -->
    <script src="jquery-3.3.1.min.js"></script>

    <!-- Datatable JS -->
    <script src="DataTables/datatables.min.js"></script>
    <script src='https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js'></script>
    <script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js'></script>
    <script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js'></script>
    <script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js'></script>
    <script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js'></script>
    <script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js'></script>
        

    <script type="text/javascript">
        $(document).ready(function(){

            $("#searchBybranchname").change(function(){
                var deptid = $(this).val();

                $.ajax({
                    url: 'getuser.php',
                    type: 'post',
                    data: {depart:deptid},
                    dataType: 'json',
                    success:function(response){

                        var len = response.length;

                        $("#searchBy_eventname").empty();
                        for( var i = 0; i<len; i++){
                            var id = response[i]['id'];
                            var name = response[i]['eventname'];

                            $("#searchBy_eventname").append("<option value='"+id+"'>"+name+"</option>");

                        }
                    }
                });
            });

        });
    </script>
</head>

<body >

    <div class="container">
        <h4>VALAINT 2K22 DATA</h4>
        <!-- Custom Filter -->
        <table Style="width:50%; padding:10px;">
            <tr> <th>Branch</th><th>Event</th></tr>
			<tr>
                <td>
                    
                    <select id="searchBybranchname" class="form-control " required="">
                       
                         <option value="">- Select -</option>
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
                </td>
                <td>
                    <select id='searchBy_eventname' class="form-control ">

                        <option value="">- Select -</option>
                       
                    </select>

                </td>
            </tr>
        </table>
		<br/>
        <div id="buttons"></div>

        <!-- Table -->
        <table id='product' class='display dataTable hoverable  table-striped'>
            <thead>
                <tr>
                    <th>Name</th>
					<th>Email</th>
                    <th>Mobile Number</th>
					<th>Place</th>
                    <th>College Name</th>
					<th>Register Number</th>
					<th>Year</th>
					<th>BranchName</th>
					<th>EventName</th>
					<th>Gender</th>
                    <th>Accommodation</th>
                    <th>Member 1</th>
					<th>Email1</th>
                    <th>Mobile Number1</th>
					<th>Gender1</th>
					<th>Accommodation1</th>
                    <th>Member 2</th>
					<th>Email2</th>
                    <th>Mobile Number2</th>
					<th>Gender2</th>
					<th>Accommodation2</th>
					 <th>Member 3</th>
					<th>Email3</th>
                    <th>Mobile Number3</th>
					<th>Gender3</th>
					<th>Accommodation3</th>
					 <th>Member 4</th>
					<th>Email4</th>
                    <th>Mobile Number4</th>
					<th>Gender4</th>
					<th>Accommodation4</th>
                   
                </tr>
            </thead>

        </table>
    </div>

    <!-- Script -->
    <script>
        $(document).ready(function () {
            var dataTable = $('#product').DataTable({
                'processing': true,
                'serverSide': true,
                'serverMethod': 'post',
                "lengthMenu": [[10, 25, 50, 100,500,1000], [10, 25, 50,100,500,1000]],
                'dom': 'Blfrtip',
        'buttons': [

									{
										"extend": 'pdf',
										"text": 'Export PDF',
										"className": 'btn btn-primary btn-sm ml-1'
									},
									{
										"extend": 'csv',
										"text": 'Export CSV',
										"className": 'btn btn-primary btn-sm ml-1'
									},


									{
										'extend': 'excel',
										"text": 'Export  Excel',
										'className': 'btn btn-primary btn-sm ml-1'
									}, {
										'extend': 'print',
										"text": 'Print',
										'className': 'btn btn-primary btn-sm ml-1'
									}

								], "language": 
{          
"processing": "<img style='width:300px; height:200px;' src='load.gif' />",
},
                
                'ajax': {
                    'url': 'event.php',
                    'data': function (data) {
                        
                        var searchBybranchname = $('#searchBybranchname').val();
                        var searchBy_eventname = $('#searchBy_eventname').val();
						

                       
                        data.searchBybranchname = searchBybranchname;
                        data.searchBy_eventname = searchBy_eventname;
						
                    }
                },
                'columns': [
                    { data: 'name' },
                    { data: 'email' },
                    { data: 'phno' },
                    { data: 'placename' },
                    { data: 'clgname' },
                    { data: 'clgid' },
                    { data: 'year' },
                    { data: 'branchname' },
                    { data: 'eventname' },
                    { data: 'gender' },
                    { data: 'accom' },
					{ data: 'tname1' },
                    { data: 'temail1' },
                    { data: 'tphno1' },
                    { data: 'tgender1' },
                    { data: 'taccom1' },
                    { data: 'tname2' },
                    { data: 'temail2' },
                    { data: 'tphno2' },
                    { data: 'tgender2' },
                    { data: 'taccom2' },
                    { data: 'tname3' },
					{ data: 'temail3' },
                    { data: 'tphno3' },
                    { data: 'tgender3' },
                    { data: 'taccom3' },
                    { data: 'tname4' },
                    { data: 'temail4' },
                    { data: 'tphno4' },
                    { data: 'tgender4' },
                    { data: 'taccom4' },
                    
                ]
                
            });

           
            $('#searchBy_eventname').change(function () {
                dataTable.draw();
            });
            $('#searchBybranchname').change(function () {
                dataTable.draw();
            });
        });
       
    </script>

    <!-- Vendor JS-->
   


    <!-- Main JS-->
  
    
</body>

</html>