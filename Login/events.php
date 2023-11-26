<?php
include("../db.php");

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
    phno like '%".$searchValue."%' or    
    clgname like '%".$searchValue."%' or 
    accom like '%".$searchValue."%' or    
    gender like '%".$searchValue."%' or 
    tname1 like '%".$searchValue."%' or
    tphno1 like '%".$searchValue."%' or 
    tname2 like '%".$searchValue."%' or 
    tname3 like '%".$searchValue."%' or
    tname4 like '%".$searchValue."%' or
    eventname like '%".$searchValue."%'  ) ";
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
    		"phno"=>$row['phno'],
    		"clgname"=>$row['clgname'],
            "accom"=>$row['accom'],
    		"gender"=>$row['gender'],
    		"tname1"=>$row['tname1'],
            "tphno1"=>$row['tphno1'],
            "tname2"=>$row['tname2'],
    		"tname3"=>$row['tname3'],
            "tname4"=>$row['tname4'],
    		"eventname"=>$row['eventname']
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
