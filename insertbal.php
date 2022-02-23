<?php 
$conn=mysqli_connect("localhost:3307","Jabed","Jab@1201");
if(!$conn){
	// echo " Not connect to the server";
}else{
	// echo " Successfully connect to server";
}
$database=mysqli_select_db($conn,"practic");
if($database){
	// echo " Select database";
}else{
	// echo "Not select database";
}

$sql="SELECT *FROM emiupdate";

 $result=mysqli_query($conn,$sql);
 if(!$result){
 	// echo "Not connected";
 }else{
 	// echo "Connected";
 }
 $receive=$_GET['sender'];
$sql= "UPDATE emiupdatee SET updatebal='$receive' WHERE id =1";
$result=mysqli_query($conn,$sql) or die("unsuccessful");
?>