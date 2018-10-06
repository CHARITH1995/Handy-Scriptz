
	<?php 
	$servername="localhost";
	$username="root";
	$pass="";
	$db="form";
	$connect=mysqli_connect($servername,$username,$pass,$db);
    	echo "<h1>welcome</h1><br>";
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$dob=$_POST["dob"];
	$mobile=$_POST["number"];
	$address=$_POST["address"];
    echo "hello ! ".$fname." ".$lname.".<br>";

	$insert="INSERT INTO member_TBL(first_name,last_name,Date_of_birth,mobile,address)
	VALUES('$fname','$lname','$dob','$mobile','$address')";
	if(mysqli_query($connect,$insert)){
		 $last_id = mysqli_insert_id($connect);
    echo "New record created successfully. Last inserted ID is: " . $last_id;
	}else{
		echo "fail".$insert." ".mysqli_error($connect);
	}
	echo "<br>your Username is: ".$fname;
	$x=rand()%100000000;
	echo "<br>your Password is: ".$x;
    $query="SELECT last_name
    from member_TBL
    where first_name='charith'";
    $result=$connect->query($query);
    
      if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "<br>";
            echo " name:".$row["first_name"]." fname:".$row["last_name"];
        }
    }

	 ?>

