<?php
include("../../db.php");

$departid = 0;

if(isset($_POST['depart'])){
   $departid = mysqli_real_escape_string($con,$_POST['depart']); // department id
}

$users_arr = array();

if($departid > 0){
    $sql = "SELECT id,eventname FROM event WHERE branch=".$departid;

    $result = mysqli_query($con,$sql);
    
    while( $row = mysqli_fetch_array($result) ){
        $userid = $row['id'];
        $name = $row['eventname'];
    
        $users_arr[] = array("id" => $userid, "eventname" => $name);
    }
}

// encoding array to json format
echo json_encode($users_arr);