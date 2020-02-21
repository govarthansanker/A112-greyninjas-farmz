<?php
// connect to the database
 $db_name = "id12496001_plants";  
        $mysql_user = "id12496001_root";  
        $mysql_pass = "aravind7";  
        $server_name = "localhost";  
    $db= mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);
// REGISTER USER
if (isset($_POST['reg_user']))
	{
  // receive all input values from the form
  $userid = mysqli_real_escape_string($db, $_POST['userid']);
  $pid = mysqli_real_escape_string($db, $_POST['pid']);
  $file = mysqli_real_escape_string($db, $_POST['filename']);
  
  $url = "http://plant123456.000webhostapp.com/images/".$file;
  
    $query = "INSERT INTO userplant (userid,pid,flag,url) 
          VALUES('$userid','',1,'$url')";
        //   echo $query;
          
           if($db->query($query)===TRUE)
    {
     echo "Record updated successfully";
    }
    else
    {
    echo "Error updating record: " . $db->error;
    }
          
    // mysqli_query($db, $query);
  }
// ...
?>