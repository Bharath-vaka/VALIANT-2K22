<?php
include("../../db.php");

## Read value
$draw = $_POST['draw'];
$row = $_POST['start'];
$rowperpage = $_POST['length']; // Rows display per page
$columnIndex = $_POST['order'][0]['column']; // Column index
$columnName = $_POST['columns'][$columnIndex]['data']; // Column name
$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
$searchValue = $_POST['search']['value']; // Search value

## Custom Field value
$searchBy_eventname = $_POST['searchBy_eventname'];
$searchBybranchname = $_POST['searchBybranchname'];

## Search 

$searchQuery = " ";
if($searchBybranchname != ''){
    $searchQuery .= " and (branchname ='".$searchBybranchname."' ) ";
}
if($searchBy_eventname != ''){
    $searchQuery .= " and (eventname='".$searchBy_eventname."') ";
}

if($searchValue != ''){
	$searchQuery .= " and (name like '%".$searchValue."%' or 
	email like '%".$searchValue."%' or 
    phno like '%".$searchValue."%' or  
	placename like '%".$searchValue."%' or 	
    clgname like '%".$searchValue."%' or
	clgid like '%".$searchValue."%' or
	year like '%".$searchValue."%' or 
	branchname like '%".$searchValue."%' or
	eventname like '%".$searchValue."%' or     
    gender like '%".$searchValue."%' or
	accom like '%".$searchValue."%' or 
    tname1 like '%".$searchValue."%' or
	temail1 like '%".$searchValue."%' or 
    tphno1 like '%".$searchValue."%' or
	tgender1 like '%".$searchValue."%' or 
	taccom1 like '%".$searchValue."%' or 
    tname2 like '%".$searchValue."%' or
	temail2 like '%".$searchValue."%' or 
    tphno2 like '%".$searchValue."%' or
	tgender2 like '%".$searchValue."%' or 
	taccom2 like '%".$searchValue."%' or 
	tname3 like '%".$searchValue."%' or
	temail3 like '%".$searchValue."%' or 
    tphno3 like '%".$searchValue."%' or
	tgender3 like '%".$searchValue."%' or 
	taccom3 like '%".$searchValue."%' or 
	tname4 like '%".$searchValue."%' or
	temail4 like '%".$searchValue."%' or 
    tphno4 like '%".$searchValue."%' or
	tgender4 like '%".$searchValue."%' or 
	taccom4 like '%".$searchValue."%' ) ";
}

## Total number of records without filtering
$sel = mysqli_query($con,"select count(*) as allcount from student_details");
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

## Total number of records with filtering
$sel = mysqli_query($con,"select count(*) as allcount from student_details WHERE 1 ".$searchQuery);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$empQuery = "select * from student_details WHERE 1 ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$row.",".$rowperpage;
$empRecords = mysqli_query($con, $empQuery);
$data = array();

while ($row = mysqli_fetch_assoc($empRecords)) {
    $data[] = array(
    		"name"=>$row['name'],
			"email"=>$row['email'],
    		"phno"=>$row['phno'],
			"placename"=>$row['placename'],
    		"clgname"=>$row['clgname'],
			"clgid"=>$row['clgid'],
			"year"=>$row['year'],
			"branchname"=>$row['branchname'],
			"eventname"=>$row['eventname'],
			"gender"=>$row['gender'],
            "accom"=>$row['accom'],
    		"tname1"=>$row['tname1'],
			"temail1"=>$row['temail1'],
            "tphno1"=>$row['tphno1'],
			"tgender1"=>$row['tgender1'],
			"taccom1"=>$row['taccom1'],
            "tname2"=>$row['tname2'],
			"temail2"=>$row['temail2'],
            "tphno2"=>$row['tphno2'],
			"tgender2"=>$row['tgender2'],
			"taccom2"=>$row['taccom2'],
			"tname3"=>$row['tname3'],
			"temail3"=>$row['temail3'],
            "tphno3"=>$row['tphno3'],
			"tgender3"=>$row['tgender3'],
			"taccom3"=>$row['taccom3'],
			"tname4"=>$row['tname4'],
			"temail4"=>$row['temail4'],
            "tphno4"=>$row['tphno4'],
			"tgender4"=>$row['tgender4'],
			"taccom4"=>$row['taccom4'],
    		
    	);
}

## Response
$response = array(
    "draw" => intval($draw),
    "iTotalRecords" => $totalRecords,
    "iTotalDisplayRecords" => $totalRecordwithFilter,
    "aaData" => $data
);

echo json_encode($response);
