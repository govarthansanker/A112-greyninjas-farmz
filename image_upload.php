  
<?php
//  header('Content-type : bitmap; charset=utf-8');
 
 if(isset($_POST["encoded_string"])){
 	
	$encoded_string = $_POST["encoded_string"];
	$image_name = $_POST["image_name"];
	
	$decoded_string = base64_decode($encoded_string);
	
	$path = 'images/'.$image_name;
	
	$file = fopen($path, 'wb');
	
	$is_written = fwrite($file, $decoded_string);
	fclose($file);
	
	if($is_written > 0) {
		
    	 $db_name = "id12496001_plants";  
        $mysql_user = "id12496001_root";  
        $mysql_pass = "aravind7";  
        $server_name = "localhost";  
        $connection = mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);  
// 		$query = "INSERT INTO photos(regno,url) values('$image_name','$path');";
		
// 		$result = mysqli_query($connection, $query) ;
		
// 		if($result){
// 			echo "success";
// 		}else{
// 			echo "failed";
// 		}
		
		mysqli_close($connection);
	}
 }
?>