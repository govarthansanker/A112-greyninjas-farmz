<?php

 $db_name = "id12496001_plants";  
        $mysql_user = "id12496001_root";  
        $mysql_pass = "aravind7";  
        $server_name = "localhost";  
    $db= mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);

if (isset($_POST['reg_user']))
	{
  $pid= mysqli_real_escape_string($db, $_POST['pid']);
  $url = mysqli_real_escape_string($db, $_POST['url']);
    $query = "UPDATE userplant set flag='0',pid='$pid' where url='$url'";
    // mysqli_query($db, $query);
    if($db->query($query)==TRUE){
        echo "success";
    }else{
        echo "error".$con->error;
    }
    
    
  }

?>