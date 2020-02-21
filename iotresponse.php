<?php
// connect to the database
 $db_name = "id12496001_plants";  
        $mysql_user = "id12496001_root";  
        $mysql_pass = "aravind7";  
        $server_name = "localhost";  
    $db= mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);


 $query = "select * from userplant where flag=1";
 $result=mysqli_query($db,$query);
$response = array();
$jsonData = array();
if(mysqli_num_rows($result) > 0){
while ($array = mysqli_fetch_assoc($result)) {
    array_push($response,$array);
    
    $jsonData[] = $array;
}

echo json_encode(array("server_response"=>$response));
   
  }
?>