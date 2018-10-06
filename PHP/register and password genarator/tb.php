
	<?php 
	$host="localhost";
	$user="root";
	$pass="";
	$db="form";
	$connect=mysqli_connect($host,$user,$pass,$db)
	or die(mysqli_conect_error());
	$fields="CREATE TABLE Member_TBL(
s_id int auto_increment,
first_name varchar(20) not null,
last_name varchar(20) not null,
Date_of_birth varchar(20) not null,
mobile varchar(10) not null ,
address varchar(20) not null,
primary key(s_id)

)";
if(mysqli_query($connect,$fields)){
	echo "table success";
}else{
	echo "not success".$fields . "<br>".mysqli_error($connect);
}

	 ?>

