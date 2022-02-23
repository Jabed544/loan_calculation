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

$sql="SELECT *FROM emiupdatee";

 $result=mysqli_query($conn,$sql);
 if(!$result){
 	// echo "Not connected";
 }else{
 	// echo "Connected";
 }
 if(mysqli_num_rows($result)>0){
 	while($row=mysqli_fetch_array($result)){
 		 $update=$row['updatebal'];
 		
 		echo $update;
 

 	}
 }
    
?>