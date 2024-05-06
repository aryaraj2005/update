<?php
$conn = mysqli_connect("localhost","root" , "");
mysqli_select_db($conn, "dbpoetry");

$poetry =$_POST['poetry_data'];
$name =$_POST['poet_name'];
$id=$_POST['id'];

$qry = "UPDATE dbtable SET poetry_data = '$poetry' , poet_name = '$name' WHERE id = '$id'";

$res = mysqli_query($conn ,$qry);
if($res==true)
$response = array("status"=>"1", "message"=>"Poetry updated succsesfully");
else
$response = array("status"=>"0", "message"=>"Poetry not updated succesfully");
echo json_encode($response);

?>