
	<?php 
    $host="localhost";
	$user="root";
	$pass="";
        $conn=mysqli_connect($host,$user,$pass)
	or die(mysqli_connect_error());
	$sql="CREATE DATABASE form";
	if(mysqli_query($conn,$sql)){
		echo "success";
	}else{
		echo "error <br>" ;//.$sql."<br>".mysqli_error($conn) ;
	}
	 ?>
