<?php 
$file=fopen("welcome.txt","w+")or die("unable to create file");
 $text="my first attempt ";
 fwrite($file,$text);
 $text="second attempt";
 
 fwrite($file,$text);

 if($file){
 	while(feof($file)){
 		print("!fget($file)");
 	}
 }else{
 	echo "file is not there";
 }




 ?>